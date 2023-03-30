<?php

use Latte\Runtime as LR;

/** source: E:\sturma\nette-blog\app\Presenters/templates/Post/show.latte */
final class Templated2dd5fbaa4 extends Latte\Runtime\Template
{
	public const Blocks = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<p><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Homepage:default'));
		echo '">← zpět na výpis příspěvků</a></p>

<div class="date">';
		echo LR\Filters::escapeHtmlText(($this->filters->date)($post->created_at, 'F j, Y')) /* line 5 */;
		echo '</div>

';
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo '
<div class="post">';
		echo LR\Filters::escapeHtmlText($post->body) /* line 9 */;
		echo '</div>

<div><img src=';
		echo '"' . LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($post->image)) . '"' /* line 11 */;
		echo ' alt=';
		echo '"' . LR\Filters::escapeHtmlAttr($post->image) . '"' /* line 11 */;
		echo '></div>

<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Edit:edit', [$post->ID]));
		echo '">Upravit příspěvek</a>';
	}


	/** n:block="title" on line 7 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<h1>';
		echo LR\Filters::escapeHtmlText($post->title) /* line 7 */;
		echo '</h1>
';
	}
}
