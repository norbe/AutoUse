<?php

/**
 * This file is part of the Nette Framework.
 *
 * Copyright (c) 2004, 2010 David Grudl (http://davidgrudl.com)
 *
 * This source file is subject to the "Nette license", and/or
 * GPL license. For more information please see http://nette.org
 */

namespace Nette;

use Nette;



/**
 * Callback iterator filter.
 *
 * @author     David Grudl
 */
class CallbackFilterIterator extends \FilterIterator
{
	/** @var callback */
	private $callback;


	/**
	 * Constructs a filter around another iterator.
	 * @param
	 * @param  callback
	 */
	function __construct(\Iterator $iterator, $callback)
	{
		parent::__construct($iterator);
		$this->callback = $callback;
	}



	function accept()
	{
		return call_user_func($this->callback, $this);
	}

}



/**
 * Callback recursive iterator filter.
 *
 * @author     David Grudl
 */
class RecursiveCallbackFilterIterator extends \FilterIterator implements \RecursiveIterator
{
	/** @var callback */
	private $callback;

	/** @var callback */
	private $childrenCallback;


	/**
	 * Constructs a filter around another iterator.
	 * @param
	 * @param  callback
	 */
	function __construct(\RecursiveIterator $iterator, $callback, $childrenCallback = NULL)
	{
		parent::__construct($iterator);
		$this->callback = $callback;
		$this->childrenCallback = $childrenCallback;
	}



	function accept()
	{
		return $this->callback === NULL || call_user_func($this->callback, $this);
	}



	function hasChildren()
	{
		return $this->getInnerIterator()->hasChildren()
			&& ($this->childrenCallback === NULL || call_user_func($this->childrenCallback, $this));
	}



	function getChildren()
	{
		return new self($this->getInnerIterator()->getChildren(), $this->callback, $this->childrenCallback);
	}

}
