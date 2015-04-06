<?php

/**
 * Latte engine macro n:target
 *
 * @author Jiri Novak <novak@egen.cz>
 */

namespace jinovak\Latte\Macros\Target;

use Latte\Compiler;
use Latte\MacroNode;
use Latte\PhpWriter;

class Target extends \Latte\Macros\MacroSet
{

	public static function install(Compiler $compiler)
	{
		$set = new static($compiler);
		$set->addMacro('target', null, null, function(MacroNode $node, PhpWriter $writer) {
			return $writer->write('if ($_l->tmp = array_filter(%node.array)) echo \' target="\' . %escape(implode(" ", array_unique($_l->tmp))) . \'"\'');
		});
	}

}