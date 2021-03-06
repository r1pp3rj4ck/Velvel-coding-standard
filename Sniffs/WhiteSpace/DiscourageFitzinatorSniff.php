<?php

/**
 * Symfony2_Sniffs_WhiteSpace_DiscourageFitzinatorSniff.
 *
 * Throws warnings if a file contains trailing whitespace.
 *
 * @author Justin Hileman <justin@shopopensky.com>
 */
class Velvel_Sniffs_WhiteSpace_DiscourageFitzinatorSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * A list of tokenizers this sniff supports.
     *
     * @var array
     */
    public $supportedTokenizers = array(
                                   'PHP',
                                   'JS',
                                   'CSS',
                                  );


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(T_WHITESPACE);

    }//end register()


    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile All the tokens found in the document.
     * @param int                  $stackPtr  The position of the current token in
     *                                        the stack passed in $tokens.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Make sure this is trailing whitespace.
        $line = $tokens[$stackPtr]['line'];
        if (($stackPtr < count($tokens) - 1) && $tokens[($stackPtr + 1)]['line'] === $line) {
            return;
        }

        // TODO: make it work or get rid of it
/*        $bol = $stackPtr;
        do {
            $bol--;
        } while ($tokens[$bol]['content'] == "\x10");
        $eol = $stackPtr;
        do {
            $eol++;
        } while ($tokens[$eol]['content'] == "\x10");
        $checker = false;
        for ($i = $bol; $i < $eol; $i++){
            if (($tokens[$i]['content'] == "\x10" or $tokens[$i]['content'] == "\x20") == false) {
                $checker = true;
            }
        }
        if ($checker == false) {
            return;
        }*/

        if (strpos($tokens[$stackPtr]['content'], "\n") > 0 || strpos($tokens[$stackPtr]['content'], "\r") > 0) {
            $warning = 'Please trim any trailing whitespace';
            $phpcsFile->addWarning($warning, $stackPtr);
        }

    }//end process()


}//end class
