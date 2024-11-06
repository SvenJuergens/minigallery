<?php

declare(strict_types=1);

namespace SvenJuergens\Minigallery\Backend\EventListener;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Backend\View\Event\PageContentPreviewRenderingEvent;

final class PageContentPreviewRenderingEventListener
{
    public function __invoke(PageContentPreviewRenderingEvent $event): void
    {
        if ($event->getTable() !== 'tt_content') {
            return;
        }

        if ($event->getRecord()['CType'] === 'minigallery_minigallery') {
            $out = '';
            if ($event->getRecord()['tx_minigallery_images']) {
                $out = '<div class="mt-2">
                ' . BackendUtility::thumbCode(
                    $event->getRecord(),
                    'tt_content',
                    'tx_minigallery_images',
                    '',
                    '',
                    null,
                    0,
                    '',
                    '128'
                ) . '</div>';
            }
            $event->setPreviewContent($out);
        }
    }
}
