<?php

namespace EvolutionCMS\Custom;

use Illuminate\Support\Facades\Cache;

class BaseController
{
    public $data = [];

    public function __construct()
    {
        $this->modx = EvolutionCMS();
        ksort($_GET);
        $cacheid = md5(json_encode($_GET));
        if ($this->modx->getConfig('enable_cache')) {
            $this->data = Cache::rememberForever($cacheid, function () {
                $this->render();
                return $this->data;
            });
        } else {
            $this->render();
        }
        $this->noCacheRender();
        $this->sendToView();
    }

    public function render()
    {

        $this->data['meta'] = [
            'noIndex' => $this->modx->documentObject['noindex']['1'],
            'keywords' => $this->modx->parseDocumentSource($this->modx->documentObject['keyw']['1']),
            'description' => $this->modx->parseDocumentSource($this->modx->documentObject['desc']['1']),
            'title' => $this->modx->parseDocumentSource($this->modx->documentObject['titl']['1'])
        ];

        $this->data['crumbs'] = json_decode($this->modx->runSnippet('DLCrumbs', ['api' => 1, 'showCurrent' => 1, 'addWhereList' => 'alias_visible=1']), true);

    }

    public function noCacheRender()
    {

    }

    public function globalElements()
    {
         //$this->data['topmenu'] = json_decode($this->evo->runSnippet('DLMenu', ['parents' => 0, 'maxDepth' => 1, 'api' => 1]), true)[0];
    }

    public function sendToView()
    {
        $this->modx->addDataToView($this->data);
    }
}