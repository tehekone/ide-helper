<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
const SWOOLE_VERSION                                     = '4.10.0';
const SWOOLE_VERSION_ID                                  = 41000;
const SWOOLE_MAJOR_VERSION                               = 4;
const SWOOLE_MINOR_VERSION                               = 10;
const SWOOLE_RELEASE_VERSION                             = 0;
const SWOOLE_EXTRA_VERSION                               = '';
const SWOOLE_DEBUG                                       = false;
const SWOOLE_HAVE_COMPRESSION                            = true;
const SWOOLE_HAVE_ZLIB                                   = true;
const SWOOLE_HAVE_BROTLI                                 = true;
const SWOOLE_USE_POSTGRES                                = true;
const SWOOLE_USE_SHORTNAME                               = true;
const SWOOLE_BASE                                        = 1;
const SWOOLE_PROCESS                                     = 2;
const SWOOLE_IPC_UNSOCK                                  = 1;
const SWOOLE_IPC_MSGQUEUE                                = 2;
const SWOOLE_IPC_PREEMPTIVE                              = 3;
const SWOOLE_SOCK_TCP                                    = 1;
const SWOOLE_SOCK_TCP6                                   = 3;
const SWOOLE_SOCK_UDP                                    = 2;
const SWOOLE_SOCK_UDP6                                   = 4;
const SWOOLE_SOCK_UNIX_DGRAM                             = 6;
const SWOOLE_SOCK_UNIX_STREAM                            = 5;
const SWOOLE_TCP                                         = 1;
const SWOOLE_TCP6                                        = 3;
const SWOOLE_UDP                                         = 2;
const SWOOLE_UDP6                                        = 4;
const SWOOLE_UNIX_DGRAM                                  = 6;
const SWOOLE_UNIX_STREAM                                 = 5;
const SWOOLE_SOCK_SYNC                                   = false;
const SWOOLE_SOCK_ASYNC                                  = true;
const SWOOLE_SYNC                                        = 2048;
const SWOOLE_ASYNC                                       = 1024;
const SWOOLE_KEEP                                        = 4096;
const SWOOLE_SSL                                         = 512;
const SWOOLE_SSLv3_METHOD                                = 1;
const SWOOLE_SSLv3_SERVER_METHOD                         = 2;
const SWOOLE_SSLv3_CLIENT_METHOD                         = 3;
const SWOOLE_TLSv1_METHOD                                = 6;
const SWOOLE_TLSv1_SERVER_METHOD                         = 7;
const SWOOLE_TLSv1_CLIENT_METHOD                         = 8;
const SWOOLE_TLSv1_1_METHOD                              = 9;
const SWOOLE_TLSv1_1_SERVER_METHOD                       = 10;
const SWOOLE_TLSv1_1_CLIENT_METHOD                       = 11;
const SWOOLE_TLSv1_2_METHOD                              = 12;
const SWOOLE_TLSv1_2_SERVER_METHOD                       = 13;
const SWOOLE_TLSv1_2_CLIENT_METHOD                       = 14;
const SWOOLE_DTLS_SERVER_METHOD                          = 16;
const SWOOLE_DTLS_CLIENT_METHOD                          = 15;
const SWOOLE_SSLv23_METHOD                               = 0;
const SWOOLE_SSLv23_SERVER_METHOD                        = 4;
const SWOOLE_SSLv23_CLIENT_METHOD                        = 5;
const SWOOLE_TLS_METHOD                                  = 0;
const SWOOLE_TLS_SERVER_METHOD                           = 4;
const SWOOLE_TLS_CLIENT_METHOD                           = 5;
const SWOOLE_SSL_TLSv1                                   = 8;
const SWOOLE_SSL_TLSv1_1                                 = 16;
const SWOOLE_SSL_TLSv1_2                                 = 32;
const SWOOLE_SSL_TLSv1_3                                 = 64;
const SWOOLE_SSL_DTLS                                    = 128;
const SWOOLE_SSL_SSLv2                                   = 2;
const SWOOLE_EVENT_READ                                  = 512;
const SWOOLE_EVENT_WRITE                                 = 1024;
const SWOOLE_STRERROR_SYSTEM                             = 0;
const SWOOLE_STRERROR_GAI                                = 1;
const SWOOLE_STRERROR_DNS                                = 2;
const SWOOLE_STRERROR_SWOOLE                             = 9;
const SWOOLE_ERROR_MALLOC_FAIL                           = 501;
const SWOOLE_ERROR_SYSTEM_CALL_FAIL                      = 502;
const SWOOLE_ERROR_PHP_FATAL_ERROR                       = 503;
const SWOOLE_ERROR_NAME_TOO_LONG                         = 504;
const SWOOLE_ERROR_INVALID_PARAMS                        = 505;
const SWOOLE_ERROR_QUEUE_FULL                            = 506;
const SWOOLE_ERROR_OPERATION_NOT_SUPPORT                 = 507;
const SWOOLE_ERROR_PROTOCOL_ERROR                        = 508;
const SWOOLE_ERROR_WRONG_OPERATION                       = 509;
const SWOOLE_ERROR_FILE_NOT_EXIST                        = 700;
const SWOOLE_ERROR_FILE_TOO_LARGE                        = 701;
const SWOOLE_ERROR_FILE_EMPTY                            = 702;
const SWOOLE_ERROR_DNSLOOKUP_DUPLICATE_REQUEST           = 710;
const SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED              = 711;
const SWOOLE_ERROR_DNSLOOKUP_RESOLVE_TIMEOUT             = 712;
const SWOOLE_ERROR_DNSLOOKUP_UNSUPPORTED                 = 713;
const SWOOLE_ERROR_DNSLOOKUP_NO_SERVER                   = 714;
const SWOOLE_ERROR_BAD_IPV6_ADDRESS                      = 720;
const SWOOLE_ERROR_UNREGISTERED_SIGNAL                   = 721;
const SWOOLE_ERROR_EVENT_SOCKET_REMOVED                  = 800;
const SWOOLE_ERROR_SESSION_CLOSED_BY_SERVER              = 1001;
const SWOOLE_ERROR_SESSION_CLOSED_BY_CLIENT              = 1002;
const SWOOLE_ERROR_SESSION_CLOSING                       = 1003;
const SWOOLE_ERROR_SESSION_CLOSED                        = 1004;
const SWOOLE_ERROR_SESSION_NOT_EXIST                     = 1005;
const SWOOLE_ERROR_SESSION_INVALID_ID                    = 1006;
const SWOOLE_ERROR_SESSION_DISCARD_TIMEOUT_DATA          = 1007;
const SWOOLE_ERROR_SESSION_DISCARD_DATA                  = 1008;
const SWOOLE_ERROR_OUTPUT_BUFFER_OVERFLOW                = 1009;
const SWOOLE_ERROR_OUTPUT_SEND_YIELD                     = 1010;
const SWOOLE_ERROR_SSL_NOT_READY                         = 1011;
const SWOOLE_ERROR_SSL_CANNOT_USE_SENFILE                = 1012;
const SWOOLE_ERROR_SSL_EMPTY_PEER_CERTIFICATE            = 1013;
const SWOOLE_ERROR_SSL_VERIFY_FAILED                     = 1014;
const SWOOLE_ERROR_SSL_BAD_CLIENT                        = 1015;
const SWOOLE_ERROR_SSL_BAD_PROTOCOL                      = 1016;
const SWOOLE_ERROR_SSL_RESET                             = 1017;
const SWOOLE_ERROR_SSL_HANDSHAKE_FAILED                  = 1018;
const SWOOLE_ERROR_PACKAGE_LENGTH_TOO_LARGE              = 1201;
const SWOOLE_ERROR_PACKAGE_LENGTH_NOT_FOUND              = 1202;
const SWOOLE_ERROR_DATA_LENGTH_TOO_LARGE                 = 1203;
const SWOOLE_ERROR_TASK_PACKAGE_TOO_BIG                  = 2001;
const SWOOLE_ERROR_TASK_DISPATCH_FAIL                    = 2002;
const SWOOLE_ERROR_TASK_TIMEOUT                          = 2003;
const SWOOLE_ERROR_HTTP2_STREAM_ID_TOO_BIG               = 3001;
const SWOOLE_ERROR_HTTP2_STREAM_NO_HEADER                = 3002;
const SWOOLE_ERROR_HTTP2_STREAM_NOT_FOUND                = 3003;
const SWOOLE_ERROR_HTTP2_STREAM_IGNORE                   = 3004;
const SWOOLE_ERROR_AIO_BAD_REQUEST                       = 4001;
const SWOOLE_ERROR_AIO_CANCELED                          = 4002;
const SWOOLE_ERROR_AIO_TIMEOUT                           = 4003;
const SWOOLE_ERROR_CLIENT_NO_CONNECTION                  = 5001;
const SWOOLE_ERROR_SOCKET_CLOSED                         = 6001;
const SWOOLE_ERROR_SOCKET_POLL_TIMEOUT                   = 6002;
const SWOOLE_ERROR_SOCKS5_UNSUPPORT_VERSION              = 7001;
const SWOOLE_ERROR_SOCKS5_UNSUPPORT_METHOD               = 7002;
const SWOOLE_ERROR_SOCKS5_AUTH_FAILED                    = 7003;
const SWOOLE_ERROR_SOCKS5_SERVER_ERROR                   = 7004;
const SWOOLE_ERROR_SOCKS5_HANDSHAKE_FAILED               = 7005;
const SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_ERROR            = 7101;
const SWOOLE_ERROR_HTTP_INVALID_PROTOCOL                 = 7102;
const SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_FAILED           = 7103;
const SWOOLE_ERROR_HTTP_PROXY_BAD_RESPONSE               = 7104;
const SWOOLE_ERROR_WEBSOCKET_BAD_CLIENT                  = 8501;
const SWOOLE_ERROR_WEBSOCKET_BAD_OPCODE                  = 8502;
const SWOOLE_ERROR_WEBSOCKET_UNCONNECTED                 = 8503;
const SWOOLE_ERROR_WEBSOCKET_HANDSHAKE_FAILED            = 8504;
const SWOOLE_ERROR_WEBSOCKET_PACK_FAILED                 = 8505;
const SWOOLE_ERROR_SERVER_MUST_CREATED_BEFORE_CLIENT     = 9001;
const SWOOLE_ERROR_SERVER_TOO_MANY_SOCKET                = 9002;
const SWOOLE_ERROR_SERVER_WORKER_TERMINATED              = 9003;
const SWOOLE_ERROR_SERVER_INVALID_LISTEN_PORT            = 9004;
const SWOOLE_ERROR_SERVER_TOO_MANY_LISTEN_PORT           = 9005;
const SWOOLE_ERROR_SERVER_PIPE_BUFFER_FULL               = 9006;
const SWOOLE_ERROR_SERVER_NO_IDLE_WORKER                 = 9007;
const SWOOLE_ERROR_SERVER_ONLY_START_ONE                 = 9008;
const SWOOLE_ERROR_SERVER_SEND_IN_MASTER                 = 9009;
const SWOOLE_ERROR_SERVER_INVALID_REQUEST                = 9010;
const SWOOLE_ERROR_SERVER_CONNECT_FAIL                   = 9011;
const SWOOLE_ERROR_SERVER_WORKER_EXIT_TIMEOUT            = 9012;
const SWOOLE_ERROR_SERVER_WORKER_ABNORMAL_PIPE_DATA      = 9013;
const SWOOLE_ERROR_SERVER_WORKER_UNPROCESSED_DATA        = 9014;
const SWOOLE_ERROR_CO_OUT_OF_COROUTINE                   = 10001;
const SWOOLE_ERROR_CO_HAS_BEEN_BOUND                     = 10002;
const SWOOLE_ERROR_CO_HAS_BEEN_DISCARDED                 = 10003;
const SWOOLE_ERROR_CO_MUTEX_DOUBLE_UNLOCK                = 10004;
const SWOOLE_ERROR_CO_BLOCK_OBJECT_LOCKED                = 10005;
const SWOOLE_ERROR_CO_BLOCK_OBJECT_WAITING               = 10006;
const SWOOLE_ERROR_CO_YIELD_FAILED                       = 10007;
const SWOOLE_ERROR_CO_GETCONTEXT_FAILED                  = 10008;
const SWOOLE_ERROR_CO_SWAPCONTEXT_FAILED                 = 10009;
const SWOOLE_ERROR_CO_MAKECONTEXT_FAILED                 = 10010;
const SWOOLE_ERROR_CO_IOCPINIT_FAILED                    = 10011;
const SWOOLE_ERROR_CO_PROTECT_STACK_FAILED               = 10012;
const SWOOLE_ERROR_CO_STD_THREAD_LINK_ERROR              = 10013;
const SWOOLE_ERROR_CO_DISABLED_MULTI_THREAD              = 10014;
const SWOOLE_ERROR_CO_CANNOT_CANCEL                      = 10015;
const SWOOLE_ERROR_CO_NOT_EXISTS                         = 10016;
const SWOOLE_ERROR_CO_CANCELED                           = 10017;
const SWOOLE_ERROR_CO_TIMEDOUT                           = 10018;
const SWOOLE_TRACE_SERVER                                = 2;
const SWOOLE_TRACE_CLIENT                                = 4;
const SWOOLE_TRACE_BUFFER                                = 8;
const SWOOLE_TRACE_CONN                                  = 16;
const SWOOLE_TRACE_EVENT                                 = 32;
const SWOOLE_TRACE_WORKER                                = 64;
const SWOOLE_TRACE_MEMORY                                = 128;
const SWOOLE_TRACE_REACTOR                               = 256;
const SWOOLE_TRACE_PHP                                   = 512;
const SWOOLE_TRACE_HTTP                                  = 1024;
const SWOOLE_TRACE_HTTP2                                 = 2048;
const SWOOLE_TRACE_EOF_PROTOCOL                          = 4096;
const SWOOLE_TRACE_LENGTH_PROTOCOL                       = 8192;
const SWOOLE_TRACE_CLOSE                                 = 16384;
const SWOOLE_TRACE_WEBSOCKET                             = 32768;
const SWOOLE_TRACE_REDIS_CLIENT                          = 65536;
const SWOOLE_TRACE_MYSQL_CLIENT                          = 131072;
const SWOOLE_TRACE_HTTP_CLIENT                           = 262144;
const SWOOLE_TRACE_AIO                                   = 524288;
const SWOOLE_TRACE_SSL                                   = 1048576;
const SWOOLE_TRACE_NORMAL                                = 2097152;
const SWOOLE_TRACE_CHANNEL                               = 4194304;
const SWOOLE_TRACE_TIMER                                 = 8388608;
const SWOOLE_TRACE_SOCKET                                = 16777216;
const SWOOLE_TRACE_COROUTINE                             = 33554432;
const SWOOLE_TRACE_CONTEXT                               = 67108864;
const SWOOLE_TRACE_CO_HTTP_SERVER                        = 134217728;
const SWOOLE_TRACE_TABLE                                 = 268435456;
const SWOOLE_TRACE_CO_CURL                               = 536870912;
const SWOOLE_TRACE_CARES                                 = 1073741824;
const SWOOLE_TRACE_ALL                                   = 9223372036854775807;
const SWOOLE_LOG_DEBUG                                   = 0;
const SWOOLE_LOG_TRACE                                   = 1;
const SWOOLE_LOG_INFO                                    = 2;
const SWOOLE_LOG_NOTICE                                  = 3;
const SWOOLE_LOG_WARNING                                 = 4;
const SWOOLE_LOG_ERROR                                   = 5;
const SWOOLE_LOG_NONE                                    = 6;
const SWOOLE_LOG_ROTATION_SINGLE                         = 0;
const SWOOLE_LOG_ROTATION_MONTHLY                        = 1;
const SWOOLE_LOG_ROTATION_DAILY                          = 2;
const SWOOLE_LOG_ROTATION_HOURLY                         = 3;
const SWOOLE_LOG_ROTATION_EVERY_MINUTE                   = 4;
const SWOOLE_IPC_NONE                                    = 0;
const SWOOLE_IPC_UNIXSOCK                                = 1;
const SWOOLE_IPC_SOCKET                                  = 3;
const SWOOLE_IOV_MAX                                     = 1024;
const SWOOLE_FILELOCK                                    = 2;
const SWOOLE_MUTEX                                       = 3;
const SWOOLE_SEM                                         = 4;
const SWOOLE_RWLOCK                                      = 1;
const SWOOLE_TIMER_MIN_MS                                = 1;
const SWOOLE_TIMER_MIN_SEC                               = 0.001;
const SWOOLE_TIMER_MAX_MS                                = 9223372036854775807;
const SWOOLE_TIMER_MAX_SEC                               = 9223372036854775807;
const SWOOLE_DEFAULT_MAX_CORO_NUM                        = 100000;
const SWOOLE_CORO_MAX_NUM_LIMIT                          = 9223372036854775807;
const SWOOLE_CORO_INIT                                   = 0;
const SWOOLE_CORO_WAITING                                = 1;
const SWOOLE_CORO_RUNNING                                = 2;
const SWOOLE_CORO_END                                    = 3;
const SWOOLE_EXIT_IN_COROUTINE                           = 2;
const SWOOLE_EXIT_IN_SERVER                              = 4;
const SWOOLE_CHANNEL_OK                                  = 0;
const SWOOLE_CHANNEL_TIMEOUT                             = -1;
const SWOOLE_CHANNEL_CLOSED                              = -2;
const SWOOLE_CHANNEL_CANCELED                            = -3;
const SWOOLE_HOOK_TCP                                    = 2;
const SWOOLE_HOOK_UDP                                    = 4;
const SWOOLE_HOOK_UNIX                                   = 8;
const SWOOLE_HOOK_UDG                                    = 16;
const SWOOLE_HOOK_SSL                                    = 32;
const SWOOLE_HOOK_TLS                                    = 64;
const SWOOLE_HOOK_STREAM_FUNCTION                        = 128;
const SWOOLE_HOOK_STREAM_SELECT                          = 128;
const SWOOLE_HOOK_FILE                                   = 256;
const SWOOLE_HOOK_STDIO                                  = 32768;
const SWOOLE_HOOK_SLEEP                                  = 512;
const SWOOLE_HOOK_PROC                                   = 1024;
const SWOOLE_HOOK_CURL                                   = 2048;
const SWOOLE_HOOK_NATIVE_CURL                            = 4096;
const SWOOLE_HOOK_BLOCKING_FUNCTION                      = 8192;
const SWOOLE_HOOK_SOCKETS                                = 16384;
const SWOOLE_HOOK_ALL                                    = 2147479551;
const SOCKET_ECANCELED                                   = 89;
const SWOOLE_HTTP_CLIENT_ESTATUS_CONNECT_FAILED          = -1;
const SWOOLE_HTTP_CLIENT_ESTATUS_REQUEST_TIMEOUT         = -2;
const SWOOLE_HTTP_CLIENT_ESTATUS_SERVER_RESET            = -3;
const SWOOLE_HTTP_CLIENT_ESTATUS_SEND_FAILED             = -4;
const SWOOLE_MYSQLND_CR_UNKNOWN_ERROR                    = 2000;
const SWOOLE_MYSQLND_CR_CONNECTION_ERROR                 = 2002;
const SWOOLE_MYSQLND_CR_SERVER_GONE_ERROR                = 2006;
const SWOOLE_MYSQLND_CR_OUT_OF_MEMORY                    = 2008;
const SWOOLE_MYSQLND_CR_SERVER_LOST                      = 2013;
const SWOOLE_MYSQLND_CR_COMMANDS_OUT_OF_SYNC             = 2014;
const SWOOLE_MYSQLND_CR_CANT_FIND_CHARSET                = 2019;
const SWOOLE_MYSQLND_CR_MALFORMED_PACKET                 = 2027;
const SWOOLE_MYSQLND_CR_NOT_IMPLEMENTED                  = 2054;
const SWOOLE_MYSQLND_CR_NO_PREPARE_STMT                  = 2030;
const SWOOLE_MYSQLND_CR_PARAMS_NOT_BOUND                 = 2031;
const SWOOLE_MYSQLND_CR_INVALID_PARAMETER_NO             = 2034;
const SWOOLE_MYSQLND_CR_INVALID_BUFFER_USE               = 2035;
const SWOOLE_REDIS_MODE_MULTI                            = 0;
const SWOOLE_REDIS_MODE_PIPELINE                         = 1;
const SWOOLE_REDIS_TYPE_NOT_FOUND                        = 0;
const SWOOLE_REDIS_TYPE_STRING                           = 1;
const SWOOLE_REDIS_TYPE_SET                              = 2;
const SWOOLE_REDIS_TYPE_LIST                             = 3;
const SWOOLE_REDIS_TYPE_ZSET                             = 4;
const SWOOLE_REDIS_TYPE_HASH                             = 5;
const SWOOLE_REDIS_ERR_IO                                = 1;
const SWOOLE_REDIS_ERR_OTHER                             = 2;
const SWOOLE_REDIS_ERR_EOF                               = 3;
const SWOOLE_REDIS_ERR_PROTOCOL                          = 4;
const SWOOLE_REDIS_ERR_OOM                               = 5;
const SWOOLE_REDIS_ERR_CLOSED                            = 6;
const SWOOLE_REDIS_ERR_NOAUTH                            = 7;
const SWOOLE_REDIS_ERR_ALLOC                             = 8;
const SWOOLE_DISPATCH_RESULT_DISCARD_PACKET              = -1;
const SWOOLE_DISPATCH_RESULT_CLOSE_CONNECTION            = -2;
const SWOOLE_DISPATCH_RESULT_USERFUNC_FALLBACK           = -3;
const SWOOLE_TASK_TMPFILE                                = 1;
const SWOOLE_TASK_SERIALIZE                              = 2;
const SWOOLE_TASK_NONBLOCK                               = 4;
const SWOOLE_TASK_CALLBACK                               = 8;
const SWOOLE_TASK_WAITALL                                = 16;
const SWOOLE_TASK_COROUTINE                              = 32;
const SWOOLE_TASK_PEEK                                   = 64;
const SWOOLE_TASK_NOREPLY                                = 128;
const SWOOLE_WORKER_BUSY                                 = 1;
const SWOOLE_WORKER_IDLE                                 = 2;
const SWOOLE_WORKER_EXIT                                 = 3;
const SWOOLE_WEBSOCKET_STATUS_CONNECTION                 = 1;
const SWOOLE_WEBSOCKET_STATUS_HANDSHAKE                  = 2;
const SWOOLE_WEBSOCKET_STATUS_ACTIVE                     = 3;
const SWOOLE_WEBSOCKET_STATUS_CLOSING                    = 4;
const SWOOLE_WEBSOCKET_OPCODE_CONTINUATION               = 0;
const SWOOLE_WEBSOCKET_OPCODE_TEXT                       = 1;
const SWOOLE_WEBSOCKET_OPCODE_BINARY                     = 2;
const SWOOLE_WEBSOCKET_OPCODE_CLOSE                      = 8;
const SWOOLE_WEBSOCKET_OPCODE_PING                       = 9;
const SWOOLE_WEBSOCKET_OPCODE_PONG                       = 10;
const SWOOLE_WEBSOCKET_FLAG_FIN                          = 1;
const SWOOLE_WEBSOCKET_FLAG_RSV1                         = 4;
const SWOOLE_WEBSOCKET_FLAG_RSV2                         = 8;
const SWOOLE_WEBSOCKET_FLAG_RSV3                         = 16;
const SWOOLE_WEBSOCKET_FLAG_MASK                         = 32;
const SWOOLE_WEBSOCKET_FLAG_COMPRESS                     = 2;
const SWOOLE_WEBSOCKET_CLOSE_NORMAL                      = 1000;
const SWOOLE_WEBSOCKET_CLOSE_GOING_AWAY                  = 1001;
const SWOOLE_WEBSOCKET_CLOSE_PROTOCOL_ERROR              = 1002;
const SWOOLE_WEBSOCKET_CLOSE_DATA_ERROR                  = 1003;
const SWOOLE_WEBSOCKET_CLOSE_STATUS_ERROR                = 1005;
const SWOOLE_WEBSOCKET_CLOSE_ABNORMAL                    = 1006;
const SWOOLE_WEBSOCKET_CLOSE_MESSAGE_ERROR               = 1007;
const SWOOLE_WEBSOCKET_CLOSE_POLICY_ERROR                = 1008;
const SWOOLE_WEBSOCKET_CLOSE_MESSAGE_TOO_BIG             = 1009;
const SWOOLE_WEBSOCKET_CLOSE_EXTENSION_MISSING           = 1010;
const SWOOLE_WEBSOCKET_CLOSE_SERVER_ERROR                = 1011;
const SWOOLE_WEBSOCKET_CLOSE_TLS                         = 1015;
const WEBSOCKET_STATUS_CONNECTION                        = 1;
const WEBSOCKET_STATUS_HANDSHAKE                         = 2;
const WEBSOCKET_STATUS_FRAME                             = 3;
const WEBSOCKET_STATUS_ACTIVE                            = 3;
const WEBSOCKET_STATUS_CLOSING                           = 4;
const WEBSOCKET_OPCODE_CONTINUATION                      = 0;
const WEBSOCKET_OPCODE_TEXT                              = 1;
const WEBSOCKET_OPCODE_BINARY                            = 2;
const WEBSOCKET_OPCODE_CLOSE                             = 8;
const WEBSOCKET_OPCODE_PING                              = 9;
const WEBSOCKET_OPCODE_PONG                              = 10;
const WEBSOCKET_CLOSE_NORMAL                             = 1000;
const WEBSOCKET_CLOSE_GOING_AWAY                         = 1001;
const WEBSOCKET_CLOSE_PROTOCOL_ERROR                     = 1002;
const WEBSOCKET_CLOSE_DATA_ERROR                         = 1003;
const WEBSOCKET_CLOSE_STATUS_ERROR                       = 1005;
const WEBSOCKET_CLOSE_ABNORMAL                           = 1006;
const WEBSOCKET_CLOSE_MESSAGE_ERROR                      = 1007;
const WEBSOCKET_CLOSE_POLICY_ERROR                       = 1008;
const WEBSOCKET_CLOSE_MESSAGE_TOO_BIG                    = 1009;
const WEBSOCKET_CLOSE_EXTENSION_MISSING                  = 1010;
const WEBSOCKET_CLOSE_SERVER_ERROR                       = 1011;
const WEBSOCKET_CLOSE_TLS                                = 1015;
const OPENSWOOLE_PGSQL_ASSOC                             = 1;
const OPENSWOOLE_PGSQL_NUM                               = 2;
const OPENSWOOLE_PGSQL_BOTH                              = 3;
const OPENSWOOLE_STATS_DEFAULT                           = 0;
const OPENSWOOLE_STATS_JSON                              = 1;
const OPENSWOOLE_STATS_OPENMETRICS                       = 2;
const OPENSWOOLE_PGRES_EMPTY_QUERY                       = 0;
const OPENSWOOLE_PGRES_COMMAND_OK                        = 1;
const OPENSWOOLE_PGRES_TUPLES_OK                         = 2;
const OPENSWOOLE_PGRES_BAD_RESPONSE                      = 5;
const OPENSWOOLE_PGRES_NONFATAL_ERROR                    = 6;
const OPENSWOOLE_PGRES_FATAL_ERROR                       = 7;
const OPENSWOOLE_PG_CONNECTION_OK                        = 0;
const OPENSWOOLE_PG_CONNECTION_BAD                       = 1;
const OPENSWOOLE_PG_CONNECTION_STARTED                   = 2;
const OPENSWOOLE_PG_CONNECTION_AWAITING_RESPONSE         = 4;
const OPENSWOOLE_PG_CONNECTION_AUTH_OK                   = 5;
const OPENSWOOLE_PG_CONNECTION_SETENV                    = 6;
const OPENSWOOLE_PG_CONNECTION_SSL_STARTUP               = 7;
const OPENSWOOLE_PG_CONNECTION_NEEDED                    = 8;
