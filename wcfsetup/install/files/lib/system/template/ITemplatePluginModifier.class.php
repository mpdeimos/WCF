<?php
namespace wcf\system\template;

/**
 * Modifiers are functions that are applied to a variable in the template 
 * before it is displayed or used in some other context.
 * 
 * @author 	Marcel Werk
 * @copyright	2001-2011 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	system.template
 * @category 	Community Framework
 */
interface ITemplatePluginModifier {
	/**
	 * Executes this modifier.
	 * 
	 * @param	array			$tagArgs		
	 * @param	TemplateEngine		$tplObj
	 * @return	string			output		
	 */
	public function execute($tagArgs, TemplateEngine $tplObj);
}
