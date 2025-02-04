<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.08771735743862918" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.29166316951756377" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6530307512509912" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.010588518902190591" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5263699457729318" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.10177238214283135" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.30485222618047714"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.527739623151896" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20972740493732056">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7648344567954402">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.03818511950252845">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3944520572856991">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3812936603225141"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8659455593590362"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1619234780107679"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10318326145175494"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5247842917483188"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6062685283947111"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5261761675926433"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.06377471137345303"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.567708257451033"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1582929685309713"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3094737487431325"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8656797083700951"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.14008351483845582"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8053564058682621"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7855472736673867"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8864273903283382"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6099519393476183"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23099282659552078"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.06825682078217454"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
