<?php

// Start of pcntl v.

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Forks the currently running process
 * @link http://php.net/manual/en/function.pcntl-fork.php
 * @return int On success, the PID of the child process is returned in the
 * parent's thread of execution, and a 0 is returned in the child's
 * thread of execution. On failure, a -1 will be returned in the
 * parent's context, no child process will be created, and a PHP
 * error is raised.
 */
function pcntl_fork () {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Waits on or returns the status of a forked child
 * @link http://php.net/manual/en/function.pcntl-waitpid.php
 * @param int $pid <p>
 * The value of pid can be one of the following:
 * <table>
 * possible values for pid
 * <tr valign="top">
 * <td>&lt; -1</td>
 * <td>
 * wait for any child process whose process group ID is equal to
 * the absolute value of pid.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>-1</td>
 * <td>
 * wait for any child process; this is the same behaviour that
 * the wait function exhibits.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * wait for any child process whose process group ID is equal to
 * that of the calling process.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>&gt; 0</td>
 * <td>
 * wait for the child whose process ID is equal to the value of
 * pid.
 * </td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * Specifying -1 as the pid is
 * equivalent to the functionality pcntl_wait provides
 * (minus options).
 * </p>
 * @param int $status <p>
 * pcntl_waitpid will store status information
 * in the status parameter which can be
 * evaluated using the following functions:
 * pcntl_wifexited,
 * pcntl_wifstopped,
 * pcntl_wifsignaled,
 * pcntl_wexitstatus,
 * pcntl_wtermsig and
 * pcntl_wstopsig.
 * </p>
 * @param int $options [optional] <p>
 * The value of options is the value of zero
 * or more of the following two global constants
 * OR'ed together:
 * <table>
 * possible values for options
 * <tr valign="top">
 * <td>WNOHANG</td>
 * <td>
 * return immediately if no child has exited.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>WUNTRACED</td>
 * <td>
 * return for children which are stopped, and whose status has
 * not been reported.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return int pcntl_waitpid returns the process ID of the
 * child which exited, -1 on error or zero if WNOHANG was used and no
 * child was available
 */
function pcntl_waitpid ($pid, &$status, $options = null) {}

/**
 * (PHP 5)<br/>
 * Waits on or returns the status of a forked child
 * @link http://php.net/manual/en/function.pcntl-wait.php
 * @param int $status <p>
 * pcntl_wait will store status information
 * in the status parameter which can be
 * evaluated using the following functions:
 * pcntl_wifexited,
 * pcntl_wifstopped,
 * pcntl_wifsignaled,
 * pcntl_wexitstatus,
 * pcntl_wtermsig and
 * pcntl_wstopsig.
 * </p>
 * @param int $options [optional] <p>
 * If wait3 is available on your system (mostly BSD-style systems), you can
 * provide the optional options parameter. If this
 * parameter is not provided, wait will be used for the system call. If
 * wait3 is not available, providing a value for options
 * will have no effect. The value of options
 * is the value of zero or more of the following two constants
 * OR'ed together:
 * <table>
 * Possible values for options
 * <tr valign="top">
 * <td>WNOHANG</td>
 * <td>
 * Return immediately if no child has exited.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>WUNTRACED</td>
 * <td>
 * Return for children which are stopped, and whose status has
 * not been reported.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return int pcntl_wait returns the process ID of the
 * child which exited, -1 on error or zero if WNOHANG was provided as an
 * option (on wait3-available systems) and no child was available.
 */
function pcntl_wait (&$status, $options = null) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Installs a signal handler
 * @link http://php.net/manual/en/function.pcntl-signal.php
 * @param int $signo <p>
 * The signal number.
 * </p>
 * @param callback $handler <p>
 * The signal handler which may be the name of a user created function,
 * or method, or either of the two global constants 
 * SIG_IGN or SIG_DFL. 
 * </p>
 * <p>
 * Note that when you set a handler to an object method, that object's
 * reference count is increased which makes it persist until you either
 * change the handler to something else, or your script ends.
 * </p>
 * @param bool $restart_syscalls [optional] <p>
 * Specifies whether system call restarting should be used when this
 * signal arrives.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function pcntl_signal ($signo, $handler, $restart_syscalls = null) {}

/**
 * (PHP 5 &gt;= 5.3.0)<br/>
 * Calls signal handlers for pending signals
 * @link http://php.net/manual/en/function.pcntl-signal-dispatch.php
 * @return bool Returns true on success or false on failure.
 */
function pcntl_signal_dispatch () {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Checks if status code represents a normal exit
 * @link http://php.net/manual/en/function.pcntl-wifexited.php
 * @param int $status &pcntl.parameter.status;
 * @return bool true if the child status code represents a normal exit, false
 * otherwise.
 */
function pcntl_wifexited ($status) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Checks whether the child process is currently stopped
 * @link http://php.net/manual/en/function.pcntl-wifstopped.php
 * @param int $status &pcntl.parameter.status;
 * @return bool true if the child process which caused the return is
 * currently stopped, false otherwise.
 */
function pcntl_wifstopped ($status) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Checks whether the status code represents a termination due to a signal
 * @link http://php.net/manual/en/function.pcntl-wifsignaled.php
 * @param int $status &pcntl.parameter.status;
 * @return bool true if the child process exited because of a signal which was
 * not caught, false otherwise.
 */
function pcntl_wifsignaled ($status) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Returns the return code of a terminated child
 * @link http://php.net/manual/en/function.pcntl-wexitstatus.php
 * @param int $status &pcntl.parameter.status;
 * @return int the return code, as an integer.
 */
function pcntl_wexitstatus ($status) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Returns the signal which caused the child to terminate
 * @link http://php.net/manual/en/function.pcntl-wtermsig.php
 * @param int $status &pcntl.parameter.status;
 * @return int the signal number, as an integer.
 */
function pcntl_wtermsig ($status) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Returns the signal which caused the child to stop
 * @link http://php.net/manual/en/function.pcntl-wstopsig.php
 * @param int $status &pcntl.parameter.status;
 * @return int the signal number.
 */
function pcntl_wstopsig ($status) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
 * Executes specified program in current process space
 * @link http://php.net/manual/en/function.pcntl-exec.php
 * @param string $path <p>
 * path must be the path to a binary executable or a
 * script with a valid path pointing to an executable in the shebang (
 * #!/usr/local/bin/perl for example) as the first line. See your system's
 * man execve(2) page for additional information.
 * </p>
 * @param array $args [optional] <p>
 * args is an array of argument strings passed to the
 * program.
 * </p>
 * @param array $envs [optional] <p>
 * envs is an array of strings which are passed as
 * environment to the program. The array is in the format of name => value,
 * the key being the name of the environmental variable and the value being
 * the value of that variable.
 * </p>
 * @return void false on error and does not return on success.
 */
function pcntl_exec ($path, $args = nullarray , $envs = nullarray ) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
 * Set an alarm clock for delivery of a signal
 * @link http://php.net/manual/en/function.pcntl-alarm.php
 * @param int $seconds <p>
 * The number of seconds to wait. If seconds is
 * zero, no new alarm is created.
 * </p>
 * @return int the time in seconds that any previously scheduled alarm had
 * remaining before it was to be delivered, or 0 if there
 * was no previously scheduled alarm.
 */
function pcntl_alarm ($seconds) {}

/**
 * (PHP 5)<br/>
 * Get the priority of any process
 * @link http://php.net/manual/en/function.pcntl-getpriority.php
 * @param int $pid [optional] <p>
 * If not specified, the pid of the current process is used.
 * </p>
 * @param int $process_identifier [optional] <p>
 * One of PRIO_PGRP, PRIO_USER
 * or PRIO_PROCESS.
 * </p>
 * @return int pcntl_getpriority returns the priority of the process
 * or false on error. A lower numerical value causes more favorable
 * scheduling.
 */
function pcntl_getpriority ($pid = null, $process_identifier = null) {}

/**
 * (PHP 5)<br/>
 * Change the priority of any process
 * @link http://php.net/manual/en/function.pcntl-setpriority.php
 * @param int $priority <p>
 * priority is generally a value in the range
 * -20 to 20. The default priority
 * is 0 while a lower numerical value causes more
 * favorable scheduling. Because priority levels can differ between
 * system types and kernel versions, please see your system's setpriority(2)
 * man page for specific details.
 * </p>
 * @param int $pid [optional] <p>
 * If not specified, the pid of the current process is used.
 * </p>
 * @param int $process_identifier [optional] <p>
 * One of PRIO_PGRP, PRIO_USER
 * or PRIO_PROCESS.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function pcntl_setpriority ($priority, $pid = null, $process_identifier = null) {}

/**
 * (PHP 5 &gt;= 5.3.0)<br/>
 * Sets and retrieves blocked signals
 * @link http://php.net/manual/en/function.pcntl-sigprocmask.php
 * @param int $how <p>
 * Sets the behavior of pcntl_sigprocmask. Possible
 * values: 
 * SIG_BLOCK: Add the signals to the
 * currently blocked signals.
 * SIG_UNBLOCK: Remove the signals from the
 * currently blocked signals.
 * SIG_SETMASK: Replace the currently
 * blocked signals by the given list of signals.
 * </p>
 * @param array $set <p>
 * List of signals.
 * </p>
 * @param array $oldset [optional] <p>
 * The oldset parameter is set to an array
 * containing the list of the previously blocked signals.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function pcntl_sigprocmask ($how, $setarray , &$oldset = nullarray ) {}

/**
 * (PHP 5 &gt;= 5.3.0)<br/>
 * Waits for signals
 * @link http://php.net/manual/en/function.pcntl-sigwaitinfo.php
 * @param array $set <p>
 * Array of signals to wait for.
 * </p>
 * @param array $siginfo [optional] <p>
 * The siginfo parameter is set to an array containing
 * informations about the signal.
 * </p>
 * <p>
 * The following elements are set for all signals:
 * signo: Signal number
 * errno: An error number
 * code: Signal code
 * </p>
 * <p>
 * The following elements may be set for the SIGCHLD signal:
 * status: Exit value or signal
 * utime: User time consumed
 * stime: System time consumed
 * pid: Sending process ID
 * uid: Real user ID of sending process
 * </p>
 * <p>
 * The following elements may be set for the SIGILL,
 * SIGFPE, SIGSEGV and
 * SIGBUS signals:
 * addr: Memory location which caused fault
 * </p>
 * <p>
 * The following element may be set for the SIGPOLL
 * signal:
 * band: Band event
 * fd: File descriptor number
 * </p>
 * @return int On success, pcntl_sigwaitinfo returns a signal number.
 */
function pcntl_sigwaitinfo ($setarray , &$siginfo = nullarray ) {}

/**
 * (PHP 5 &gt;= 5.3.0)<br/>
 * Waits for signals, with a timeout
 * @link http://php.net/manual/en/function.pcntl-sigtimedwait.php
 * @param array $set <p>
 * Array of signals to wait for.
 * </p>
 * @param array $siginfo [optional] <p>
 * The siginfo is set to an array containing
 * informations about the signal. See
 * pcntl_sigwaitinfo.
 * </p>
 * @param int $seconds [optional] <p>
 * Timeout in seconds.
 * </p>
 * @param int $nanoseconds [optional] <p>
 * Timeout in nanoseconds.
 * </p>
 * @return int On success, pcntl_sigtimedwait returns a signal number.
 */
function pcntl_sigtimedwait ($setarray , &$siginfo = nullarray , $seconds = null, $nanoseconds = null) {}

define ('WNOHANG', 1);
define ('WUNTRACED', 2);
define ('SIG_IGN', 1);
define ('SIG_DFL', 0);
define ('SIG_ERR', -1);
define ('SIGHUP', 1);
define ('SIGINT', 2);
define ('SIGQUIT', 3);
define ('SIGILL', 4);
define ('SIGTRAP', 5);
define ('SIGABRT', 6);
define ('SIGIOT', 6);
define ('SIGBUS', 7);
define ('SIGFPE', 8);
define ('SIGKILL', 9);
define ('SIGUSR1', 10);
define ('SIGSEGV', 11);
define ('SIGUSR2', 12);
define ('SIGPIPE', 13);
define ('SIGALRM', 14);
define ('SIGTERM', 15);
define ('SIGSTKFLT', 16);
define ('SIGCLD', 17);
define ('SIGCHLD', 17);
define ('SIGCONT', 18);
define ('SIGSTOP', 19);
define ('SIGTSTP', 20);
define ('SIGTTIN', 21);
define ('SIGTTOU', 22);
define ('SIGURG', 23);
define ('SIGXCPU', 24);
define ('SIGXFSZ', 25);
define ('SIGVTALRM', 26);
define ('SIGPROF', 27);
define ('SIGWINCH', 28);
define ('SIGPOLL', 29);
define ('SIGIO', 29);
define ('SIGPWR', 30);
define ('SIGSYS', 31);
define ('SIGBABY', 31);
define ('PRIO_PGRP', 1);
define ('PRIO_USER', 2);
define ('PRIO_PROCESS', 0);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SIG_BLOCK', 0);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SIG_UNBLOCK', 1);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SIG_SETMASK', 2);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SI_USER', 0);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SI_KERNEL', 128);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SI_QUEUE', -1);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SI_TIMER', -2);
define ('SI_MESGQ', -3);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SI_ASYNCIO', -4);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SI_SIGIO', -5);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SI_TKILL', -6);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('CLD_EXITED', 1);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('CLD_KILLED', 2);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('CLD_DUMPED', 3);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('CLD_TRAPPED', 4);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('CLD_STOPPED', 5);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('CLD_CONTINUED', 6);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('TRAP_BRKPT', 1);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('TRAP_TRACE', 2);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('POLL_IN', 1);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('POLL_OUT', 2);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('POLL_MSG', 3);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('POLL_ERR', 4);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('POLL_PRI', 5);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('POLL_HUP', 6);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('ILL_ILLOPC', 1);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('ILL_ILLOPN', 2);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('ILL_ILLADR', 3);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('ILL_ILLTRP', 4);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('ILL_PRVOPC', 5);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('ILL_PRVREG', 6);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('ILL_COPROC', 7);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('ILL_BADSTK', 8);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('FPE_INTDIV', 1);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('FPE_INTOVF', 2);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('FPE_FLTDIV', 3);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('FPE_FLTOVF', 4);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('FPE_FLTUND', 7);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('FPE_FLTRES', 6);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('FPE_FLTINV', 7);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('FPE_FLTSUB', 8);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SEGV_MAPERR', 1);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('SEGV_ACCERR', 2);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('BUS_ADRALN', 1);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('BUS_ADRERR', 2);

/**
 * Available since PHP 5.3.0.
 * @link http://php.net/manual/en/pcntl.constants.php
 */
define ('BUS_OBJERR', 3);

// End of pcntl v.
?>
