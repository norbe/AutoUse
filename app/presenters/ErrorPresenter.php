<?php

namespace WRS\Core\Presenters;

/**
 * Error presenter
 *
 * Display error pages when somethings goes wrong
 */
class ErrorPresenter extends BasePresenter
{

	public function actionDefault($exception)
	{
		$application = Environment::getApplication();
		$application->catchExceptions = FALSE;
		if ($this->isAjax()) {
			$this->payload->error = (string)$exception;
			$this->sendPayload();

		} else {
			$this->template->robots = 'noindex,noarchive';
			if ($exception instanceof /*Nette\Application\*/BadRequestException) {

				Environment::getHttpResponse()->setCode($exception->getCode());
				switch($exception->getCode()) {
				case 403:
					$this->template->title = _('403 Permission denied');
					break;
				default:
					Environment::getHttpResponse()->setCode(404);
					$this->template->title = _('404 Not Found');
					break;
				}

			} else {
				Environment::getHttpResponse()->setCode(500);
				$this->template->title = _("Don't recognize error");

				Debug::processException($exception);
			}
		}
	}

}


