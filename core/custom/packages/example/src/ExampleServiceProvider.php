<?php namespace EvolutionCMS\Custom;

use EvolutionCMS\ServiceProvider;
use Event;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Если указать пустую строку, то сниппеты и чанки будут иметь привычное нам именование
     * Допустим, файл test создаст чанк/сниппет с именем test
     * Если же указан namespace то файл test создаст чанк/сниппет с именем example#test
     * При этом поддерживаются файлы в подпапках. Т.е. файл test из папки subdir создаст элемент с именем subdir/test
     */

    protected $namespace = 'example';

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        foreach (glob(dirname(__DIR__) . '/plugins/*.php') as $file) {
            include $file;
        }

        foreach (glob(__DIR__ . '/Controllers/*.php') as $file) {
            include $file;
        }

        $this->loadSnippetsFrom(
            dirname(__DIR__). '/snippets/',
            $this->namespace
        );

        $this->loadChunksFrom(
            dirname(__DIR__) . '/chunks/',
            $this->namespace
        );




    }
}