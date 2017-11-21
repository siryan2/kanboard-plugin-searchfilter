<?php

namespace Kanboard\Plugin\SearchFilter;

use Kanboard\Core\Translator;
use Kanboard\Core\Plugin\Base;


class Plugin extends Base
{
    public function initialize() {
        $container = $this->container;

        $this->hook->on('template:layout:css', array('template' => 'plugins/SearchFilter/Asset/css/searchFilter.css'));

        $this->template->setTemplateOverride('dashboard/overview', 'SearchFilter:dashboard/overview');
        $this->template->setTemplateOverride('search/index', 'SearchFilter:search/index');
    }

    public function onStartup() {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName() {
        return 'SearchFilter';
    }

    public function getPluginDescription() {
        return t('This plugin extend the filters.');
    }

    public function getPluginAuthor() {
        return 'Yannick Herzog';
    }

    public function getPluginVersion() {
        return '0.2.0';
    }

    public function getPluginHomepage() {
        return 'https://github.com/siryan2/kanboard-plugin-searchfilter';
    }
}
