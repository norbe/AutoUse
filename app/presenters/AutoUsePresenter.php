<?php

use Nette\Environment;

/**
 * AutoUsePresenter - part of AutoUse tool.
 *
 * @copyright  Copyright (c) 2011 Karel Hák
 * @license    New BSD License
 * @link       http://github.com/norbe/AutoUse
 */
class AutoUsePresenter extends BasePresenter
{
	public function renderDefault()
	{
		$this->template->ambigousClasses = array();
		$this->template->notInsertedUseSts = array();
		$this->template->notFoundClasses = array();
		$this->template->fileParseTimes = array();
		$this->template->unusedUseSts = array();
		$this->template->useStAdded = array();
		$this->template->possibleCb = array();

		$config = Environment::getConfig("autoUse");

		$autoUse = new AutoUseWorker();
		$autoUse->onOutput[] = array($this, "setTemplateVariables");
		$autoUse->setSource($config->sourceDir);
		$autoUse->addLibrary((array)$config->libDirs);
		$autoUse->addIgnoredDirs((array)$config->ignoredDirs);

		$autoUse->run();
	}

	public function setTemplateVariables($outputInfo, $params) {
		switch ($outputInfo) {
		case AutoUseWorker::OI_AMBIGOUS_CLASS_IN_NS:
			$this->template->ambigousClasses[] = $params;
		break;
		case AutoUseWorker::OI_CANT_ADD_USE_ST:
			$this->template->notInsertedUseSts[] = $params;
		break;
		case AutoUseWorker::OI_CLASS_NOT_FOUND:
			$this->template->notFoundClasses[] = $params;
		break;
		case AutoUseWorker::OI_FILE_ANALYSED:
			$this->template->fileParseTimes[$params[AutoUseWorker::FILE]] = $params[AutoUseWorker::TIME];
		break;
		case AutoUseWorker::OI_UNUSED_USE_ST:
			$this->template->unusedUseSts[] = $params;
		break;
		case AutoUseWorker::OI_USE_ST_ADDED:
			$this->template->useStAdded[] = $params;
		break;
		case AutoUseWorker::OI_POSSIBLE_CALLBACK:
			$this->template->possibleCb[] = $params;
		break;
		}
	}
}