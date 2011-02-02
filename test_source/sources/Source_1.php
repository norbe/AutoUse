<?php
namespace {
/**
 * Nette Framework.
 *
 * Copyright (c) 2004, 2010 David Grudl (http://davidgrudl.com)
 *
 * This source file is subject to the "Nette license", and/or
 * GPL license. For more information please see http://nette.org
 */

error_reporting(E_ALL|E_STRICT);@set_magic_quotes_runtime(FALSE);iconv_set_encoding('internal_encoding','UTF-8');extension_loaded('mbstring')&&mb_internal_encoding('UTF-8');@header('X-Powered-By: Nette Framework');define('NETTE',TRUE);define('NETTE_DIR',__DIR__);define('NETTE_VERSION_ID',20000);define('NETTE_PACKAGE','5.3');function
callback($callback,$m=NULL){return($m===NULL&&$callback
instanceof
Nette\Callback)?$callback:new
Nette\Callback($callback,$m);}function
dump($var){foreach(func_get_args()as$arg)Nette\Debug::dump($arg);return$var;}}

new
static(is_object($class)?get_class($class):$class,$method);


namespace WRS\Backend\Presenters {{

use Abc, 
  Wsds\Sdd;
use CDE;

if($this->maxDepth!==0){$iterator=new
RecursiveIteratorIterator($iterator,$this->order);

function
validateFilled(IFormControl$control){return$control->getValue()!==NULL;}}use
use RecursiveIteratorIterator;
Nette\String;

$prd = "";

"abcd::$prd";
try {
	
} catch (NejakaException $e) {
	
}

/**
 * Universal scaffolding presenter. Implements base functionality, which
 * is same in 90% of all scaffolding presenters.
 *
 * @author Martin Jelic <martin.jelic at jimmystudio.net>
 */
abstract class MultiLanguagePresenter extends ScaffoldingPresenter implements Bsdfas, \DSD\Dsds
{
	const JPEG = "neco";
	/** @persistent */
	public $selectedLanguage;

	/** @var MultiLanguageTable */
	protected $model;

	/**
	 * Initialization.
	 */
	protected function startup()
	{
		parent::startup();
		if($this->selectedLanguage === NULL)
			$this->selectedLanguage = \Language::getSelected();
		$this->model->setLanguage($this->selectedLanguage);
		$this->onBeforeEditItem[] = array($this, "selectLanguageRender");
		$this->onBeforeItemsList[] = array($this, "selectLanguageRender");
		new MultiLanguagePresenter;

		throw new \InvalidArgumentException("Model must implement IUrlTranslatable interface !");
	}

	/**************************** SelectLanguage methods *******************************/

	public function selectLanguageRender()
	{
		$this["selectLanguage"]->createInstance("render");
	}

	public function handleSelectLanguage($lang)
	{
		$this->selectedLanguage = $lang;
		$this->model->setLanguage($this->selectedLanguage);
		switch($this->getAction()) {
			case self::ACTION_DEFAULT:
				$this["itemsList"]->invalidateControl();
				break;
		}

		if(!$this->isAjax()) {
			$this->redirect("this");
		}
	}

	public function createComponentSelectLanguage()
	{

		$langList = new LanguageList();
		$langList->onLanguageChanged[] = callback($this, "handleSelectLanguage");
		$langList->lang = $this->selectedLanguage;
		$langList->class .= " choose-edited-lang";
		$langList->useAjax = TRUE;
		return $langList;
	}

	/**************************** ItemForm methods *******************************/

	protected function prepareItemFormFields(ExtendedAppForm $form)
	{
		parent::prepareItemFormFields($form);
		$this->data->untranslate_others = TRUE;
		if($this->model->isChosen()) {
			if($this->selectedLanguage != Language::getDefault()) {
				$form->addCheckbox("translated", "Translation complete?");
			} else {
				$this->data->translated = TRUE;
				$form->addHidden("translated");
				$form->addCheckbox("untranslate_others", "Mark other language versions as untranslated.");

				$this->data["untranslate_others"] = TRUE;
			}
		}
	}

	protected function extractItemFormData(ExtendedAppForm $form) {
		$data = parent::extractItemFormData($form);
		if(isset($data["untranslate_others"]) && $data["untranslate_others"]) {
			foreach(Language::getNotDefaults() as $lang) {
				$data["translated_$lang"] = FALSE;
			}
		}
		unset($data["untranslate_others"]);
		return $data;
	}

	/**************************** ItemsList methods *******************************/

	protected function prepareItemsListColumns(DataGrid $grid)
	{
		if($this->selectedLanguage != Language::getDefault()) {
			$grid->addCheckboxColumn("translated", _("Translation complete?"))
				->addSelectboxFilter(array(0 => _("No"), 1 => _("Yes")), TRUE);
		}
	}

	protected function prepareItemsListActions(DataGrid $grid)
	{
//		// multiple actions
//		$operations = array(
//						'setTranslated' => _('Set selected items as translated'),
//						'setUntranslated' => _('Set selected items as untranslated'),
//					);
//		$callback = array($this, 'itemsListHandler');
//		$grid->allowOperations($operations, $callback); // allows checkboxes to do operations with more rows


		// row actions
		$icon = Html::el('span');

		$grid->addAction(sprintf(_('Edit %s version'),strtoupper($this->selectedLanguage)), "edit", clone $icon->class("icon icon-edit"));
		if($this->selectedLanguage == Language::getDefault()) {
			$grid->addAction(_("Delete"), "delete!", clone $icon->class("icon icon-del"), TRUE);
		}
	}


}

}