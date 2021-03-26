{extends file="../templates/main.tpl"}

{block name=footer}Przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}
    
<section>
    <div class="box">
	<div class="content">
            <h2 class="align-center">Oblicz rezystor</h2>
            <hr />
		<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post">
		<div class="field">
                    <label for="v1">Napięcie zasilania (V):</label>
                    <input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)" value="{$form['v1']}>
		</div>
		<div class="field">
                    <label for="v2">Napięcie przewodzenia (V):</label>
                    <input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)" value="{$form['v2']}>
		</div>
		<div class="field">
                    <label for="amp">Prąd przewodzenia (mA):</label>
                    <input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)" value="{$form['amp']}>
		</div>
		<ul class="actions align-center">
                    <li><input value="Oblicz" class="button special" type="submit"></li>
		</ul>
		</form>
	</div>
    </div>
</section>
    
{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($msg)}
	{if count($msg) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $msg as $msgs}
		{strip}
			<li>{$msgs}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($info)}
	{if count($info) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $info as $msgs}
		{strip}
			<li>{$msgs}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($resistor)}
	<h4>Wynik</h4>
	<p class="res">
	{$resistor}
	</p>
{/if}
                    
{/block}