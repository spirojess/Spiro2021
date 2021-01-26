<?php

/**
 * @package    Grav\Common\Assets
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Assets;

use Grav\Common\Assets\Traits\AssetUtilsTrait;
use Grav\Common\Grav;
use Grav\Common\Uri;
use Grav\Common\Utils;
use Grav\Framework\Object\PropertyObject;
use SplFileInfo;

/**
 * Class BaseAsset
 * @package Grav\Common\Assets
 */
abstract class BaseAsset extends PropertyObject
{
    use AssetUtilsTrait;

    protected const CSS_ASSET = true;
    protected const JS_ASSET = false;

    /** @var string|false */
    protected $asset;
    /** @var string */
    protected $asset_type;
    /** @var int */
    protected $order;
    /** @var string */
    protected $group;
    /** @var string */
    protected $position;
    /** @var int */
    protected $priority;
    /** @var array */
    protected $attributes = [];

    /** @var string */
    protected $timestamp;
    /** @var int|false */
    protected $modified;
    /** @var bool */
    protected $remote;
    /** @var string */
    protected $query = '';

    // Private Bits
    /** @var bool */
    private $css_rewrite = false;
    /** @var bool */
    private $css_minify = false;

    /**
     * @return string
     */
    abstract function render();

    /**
     * BaseAsset constructor.
     * @param array $elements
     * @param string|null $key
     */
    public function __construct(array $elements = [], $key = null)
    {
        $base_config = [
            'group' => 'head',
            'position' => 'pipeline',
            'priority' => 10,
            'modified' => null,
            'asset' => null
        ];

        // Merge base defaults
        $elements = array_merge($base_config, $elements);

        parent::__construct($elements, $key);
    }

    /**
     * @param string|false $asset
     * @param array $options
     * @return $this|false
     */
    public function init($asset, $options)
    {
        $config = Grav::instance()['config'];
        $uri = Grav::instance()['uri'];

        // set attributes
        foreach ($options as $key => $value) {
            if ($this->hasProperty($key)) {
                $this->setProperty($key, $value);
            } else {
                $this->attributes[$key] = $value;
            }
        }

        // Force priority to be an int
        $this->priority = (int) $this->priority;

        // Do some special stuff for CSS/JS (not inline)
        if (!Utils::startsWith($this->getType(), 'inline')) {
            $this->base_url = rtrim($uri->rootUrl($config->get('system.absolute_urls')), '/') . '/';
            $this->remote = static::isRemoteLink($asset);

            // Move this to render?
            if (!$this->remote) {
                $asset_parts = parse_url($asset);
                if (isset($asset_parts['query'])) {
                    $this->query = $asset_parts['query'];
                    unset($asset_parts['query']);
                    $asset = Uri::buildUrl($asset_parts);
                }

                $locator = Grav::instance()['locator'];

                if ($locator->isStream($asset)) {
                    $path = $locator->findResource($asset, true);
                } else {
                    $path = GRAV_ROOT . $asset;
                }

                // If local file is missing return
                if ($path === false) {
                    return false;
                }

                $file = new SplFileInfo($path);

                $asset = $this->buildLocalLink($file->getPathname());

                $this->modified = $file->isFile() ? $file->getMTime() : false;
            }
        }

        $this->asset = $asset;

        return $this;
    }

    /**
     * @return string|false
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * @return bool
     */
    public function getRemote()
    {
        return $this->remote;
    }

    /**
     * @param string $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }


    /**
     *
     * Get the last modification time of asset
     *
     * @param  string $asset    the asset string reference
     *
     * @return string           the last modifcation time or false on error
     */
//    protected function getLastModificationTime($asset)
//    {
//        $file = GRAV_ROOT . $asset;
//        if (Grav::instance()['locator']->isStream($asset)) {
//            $file = $this->buildLocalLink($asset, true);
//        }
//
//        return file_exists($file) ? filemtime($file) : false;
//    }

    /**
     *
     * Build local links including grav asset shortcodes
     *
     * @param  string $asset    the asset string reference
     *
     * @return string|false     the final link url to the asset
     */
    protected function buildLocalLink($asset)
    {
        if ($asset) {
            return $this->base_url . ltrim(Utils::replaceFirstOccurrence(GRAV_ROOT, '', $asset), '/');
        }
        return false;
    }


    /**
     * Implements JsonSerializable interface.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return ['type' => $this->getType(), 'elements' => $this->getElements()];
    }

    /**
     * Placeholder for AssetUtilsTrait method
     *
     * @param string $file
     * @param string $dir
     * @param bool $local
     * @return string
     */
    protected function cssRewrite($file, $dir, $local)
    {
        return;
    }
}
