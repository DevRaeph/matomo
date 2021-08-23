<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\Diagnostics\Diagnostic;

use Piwik\Common;
use Piwik\Container\StaticContainer;
use Piwik\Filesystem;
use Piwik\Http;
use Piwik\Piwik;
use Piwik\SettingsPiwik;

class RecommendedPrivateDirectories extends PrivateDirectories
{
    protected $privatePaths = [['tmp/', 'tmp/empty'], ['lang/en.json']];
    protected $labelKey = 'Diagnostics_RecommendedPrivateDirectories';
    protected function addError(DiagnosticResult &$result)
    {
        $result->addItem(new DiagnosticResultItem(DiagnosticResult::STATUS_INFORMATIONAL,
            $this->translator->translate('Diagnostics_UrlsAccessibleViaBrowser', [
                '<a target="_blank" rel="noopener noreferrer" href="https://matomo.org/faq/troubleshooting/how-do-i-fix-the-error-private-directories-are-accessible/">',
                '</a>',
            ])));
    }
}

