<?php

require_once(PATH_SDK_ROOT . 'Diagnostics/TraceLevel.php');


/**
 * This file contains an interface for Logging.
 */
class Logger {

	/**
	 * Logs messages depending on the ids trace level.
	 *
	 * @param TraceLevel $idsTraceLevel IDS Trace Level.
	 * @param string $messageToWrite The message to write.
	 *
	 */
	public function Log($idsTraceLevel, $messageToWrite)
	{
		file_put_contents( INTUIT_PATH_SDK_LOG . 'intuit.log', $messageToWrite."\n", FILE_APPEND);
	}
}

?>
