<?php

use Nette\Debug;

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
		$autoUse = new AutoUseWorker();
		$autoUse->onOutput[] = array($this, "setTemplateVariables");
		$autoUse->setSource("C:\dev\www\AutoUse\\test_source");
//		$autoUse->setSource("C:\\dev\\www\\websystem-git\\app");
//		$autoUse->addLibrary("C:\\dev\\apps\\NetBeans 6.9.1\\php\\phpstubs\\phpruntime");
//		$autoUse->addLibrary("C:\\dev\\\www\\websystem-git\\libs\\dibi");
//		$autoUse->addLibrary("C:\\dev\www\\websystem-git\\libs\\fckeditor");
//		$autoUse->addLibrary("C:\\dev\\www\\websystem-git\\libs\\GettextExtractor2");
//		$autoUse->addLibrary("C:\\dev\\www\\websystem-git\\libs\\Nette");

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