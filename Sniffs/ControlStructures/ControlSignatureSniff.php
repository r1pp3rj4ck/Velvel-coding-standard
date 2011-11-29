<?php
/**
 * Verifies that control statements conform to their coding standards.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Attila Bukor <attila.bukor@velvel.hu>
 * @copyright Velvel IT Solutions Ltd.
 * @license   GNU General Public Licence
 * @version   2011-11-24
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_AbstractPatternSniff', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_AbstractPatternSniff not found');
}

/**
 * Verifies that control statements conform to their coding standards.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Attila Bukor <attila.bukor@velvel.hu>
 * @copyright Velvel IT Soltutions Ltd.
 * @license   GNU General Public Licence
 * @version   2011-11-24
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class Velvel_Sniffs_ControlStructures_ControlSignatureSniff extends PHP_CodeSniffer_Standards_AbstractPatternSniff
{

    /**
     * A list of tokenizers this sniff supports.
     *
     * @var array
     */
    public $supportedTokenizers = array(
                                   'PHP',
                                   'JS',
                                  );


    /**
     * Returns the patterns that this test wishes to verify.
     *
     * @return array(string)
     */
    protected function getPatterns()
    {
        return array(
                'tryEOL...{EOL...}EOL...catch (...)EOL...{EOL',
                'doEOL...{EOL...} while (...);EOL',
                'while (...)EOL...{EOL',
                'for (...)EOL...{EOL',
                'if (...)EOL...{EOL',
                'foreach (...)EOL...{EOL',
                '}EOL...else if (...)EOL...{EOL',
                '}EOL...elseEOL...{EOL',
               );

    }//end getPatterns()


}//end class

?>
