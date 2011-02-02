<?php //netteCache[01]000224a:2:{s:4:"time";s:21:"0.61670800 1296675781";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:54:"C:\dev\www\AutoUse/app/templates/AutoUse.default.phtml";i:2;i:1296675773;}}}?><?php
// file …/templates/AutoUse.default.phtml
//

$_l = Nette\Templates\LatteMacros::initRuntime($template, NULL, 'fe498d9e92'); unset($_extends);


//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb188a49fd94_content')) { function _lb188a49fd94_content($_l, $_args) { extract($_args)
?>

<h1>Výsledek nástroje AutoUse</h1>

<?php if (count($notFoundClasses)): ?>
<h2> Nenalezené třídy (chybějící knihovna?)</h2>
<table class="warning hide-control">
	<thead>
		<tr>
			<th>Soubor</th>
			<th>Namespace</th>
			<th>Třída</th>
		</tr>
	</thead>
	<tbody><?php foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($notFoundClasses) as $info): ?>
		<tr>

			<td>
				<a href="editor://open/?file=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>&line=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["line"]) ?>" title="Editovat">
					<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>

				</a>
			</td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["namespace"]) ?></td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["class"]) ?></td>
		</tr>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</tbody>
</table>
<?php endif ?>

<?php if (count($ambigousClasses)): ?>
<h2>V USE je použit alias stejného názvu, jako některé třídy v daném NS(může způsobit "náhodný" error při použití auto loadingu)!</h2>
<table class="error hide-control">
	<thead>
		<tr>
			<th>Soubor</th>
			<th>Namespace</th>
			<th>Alias</th>
		</tr>
	</thead>
	<tbody><?php foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($ambigousClasses) as $info): ?>
		<tr>

			<td>
				<a href="editor://open/?file=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>&line=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["line"]) ?>" title="Editovat">
					<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>

				</a>
			</td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["namespace"]) ?></td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["as"]) ?></td>
		</tr>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</tbody>
</table>
<?php endif ?>

<?php if (count($notInsertedUseSts)): ?>
<h2>Třída daného názvu existuje ve více NS, nebylo možné přidat USE automaticky!</h2>
<table class="error hide-control">
	<thead>
		<tr>
			<th>Soubor</th>
			<th>Namespace</th>
			<th>Třída</th>
			<th>Nalezeno v:</th>
		</tr>
	</thead>
	<tbody><?php foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($notInsertedUseSts) as $info): ?>
		<tr>

			<td>
				<a href="editor://open/?file=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>&line=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["line"]) ?>" title="Editovat">
					<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>

				</a>
			</td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["namespace"]) ?></td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["class"]) ?></td>
			<td>
<?php foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($info["class_occurences"]) as $namespace => $data): ?>
			   <a href="editor://open/?file=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($data["file"]) ?>&line=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($data["line"]) ?>" title="Otevřít"><?php echo Nette\Templates\TemplateHelpers::escapeHtml($namespace) ?>\<?php echo Nette\Templates\TemplateHelpers::escapeHtml($data["class"]) ?></a> 
			   <?php if (!$iterator->isLast()): ?>x <br /><?php endif ?>

<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
			</td>
		</tr>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</tbody>
</table>
<?php endif ?>

<?php if (count($unusedUseSts)): ?>
<h2>Třída z USE není nikde použita!</h2>
<table class="warning hide-control">
	<thead>
		<tr>
			<th>Soubor</th>
			<th>Namespace</th>
			<th>Alias</th>
		</tr>
	</thead>
	<tbody><?php foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($unusedUseSts) as $info): ?>
		<tr>

			<td>
				<a href="editor://open/?file=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>&line=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["line"]) ?>" title="Editovat">
					<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>

				</a>
			</td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["namespace"]) ?></td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["as"]) ?></td>
		</tr>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</tbody>
</table>
<?php endif ?>

<h2>Vložené příkazy USE</h2>
<table class="hide-control">
	<thead>
		<tr>
			<th>Soubor</th>
			<th>Namespace</th>
			<th>Třída</th>
		</tr>
	</thead>
	<tbody><?php foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($useStAdded) as $info): ?>
		<tr>

			<td>
				<a href="editor://open/?file=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>&line=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["line"]) ?>" title="Editovat">
					<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>

				</a>
			</td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["namespace"]) ?></td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["class"]) ?></td>
		</tr>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ;if (!count($useStAdded)): ?>
		<tr>

			<td colspan="3">Nebyla importována žádná třída</td>
		</tr>
<?php endif ?>
	</tbody>
</table>

<?php if (count($possibleCb)): ?>
<h2>Možné callbacky - vyžaduje ruční vložení NS přímo do nalezeného řetězce</h2>
<table class="hide-control">
	<thead>
		<tr>
			<th>Soubor</th>
			<th>Namespace</th>
			<th>Řetězec</th>
		</tr>
	</thead>
	<tbody><?php foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($possibleCb) as $info): ?>
		<tr>

			<td>
				<a href="editor://open/?file=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>&line=<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["line"]) ?>" title="Editovat">
					<?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["file"]) ?>

				</a>
			</td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["namespace"]) ?></td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($info["value"]) ?></td>
		</tr>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</tbody>
</table>
<?php endif ?>

<h2> Čas parsování jednotlivých souborů</h2>
<table class="hide-control">
	<thead>
		<tr>
			<th>Soubor</th>
			<th>Čas [s]</th>
		</tr>
	</thead>
	<tbody><?php foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($fileParseTimes) as $file => $time): ?>
		<tr>

			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($file) ?></td>
			<td><?php echo Nette\Templates\TemplateHelpers::escapeHtml($time) ?></td>
		</tr>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ;if (!count($fileParseTimes)): ?>
		<tr>

			<td colspan="2">Nebyl nalezen žádný soubor</td>
		</tr>
<?php endif ?>
	</tbody>
</table><?php
}}

//
// end of blocks
//

if ($_l->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { Nette\Templates\LatteMacros::renderSnippets($control, $_l, get_defined_vars()); }

if (Nette\Templates\SnippetHelper::$outputAllowed) {
if (!$_l->extends) { call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()); }  
}

if ($_l->extends) { ob_end_clean(); Nette\Templates\LatteMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
