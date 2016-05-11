<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2016 Smartex.io Ltd.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

global $smOptions;

// Please look carefully throught these options and adjust according to your installation.
// Alternatively, any of these options can be dynamically set upon calling the functions in sm_lib.

// REQUIRED Api key you created at smartex.io
// example: $smOptions['apiKey'] = 'apikey';
$smOptions['apiKey'] = '';

// Indicates whether API key is from test.smartex.io or smartex.io
$smOptions['network'] = 'live';

// whether to verify POS data by hashing above api key.  If set to false, you should
// have some way of verifying that callback data comes from smartex.io
$smOptions['verifyPos'] = true;

// email where invoice update notifications should be sent
$smOptions['notificationEmail'] = '';

// url where smartex server should send update notifications.  See API doc for more details.
# example: $smNotificationUrl = 'http://www.example.com/callback.php';
$smOptions['notificationURL'] = '';

// url where the customer should be directed to after paying for the order
# example: $smNotificationUrl = 'http://www.example.com/confirmation.php';
$smOptions['redirectURL'] = '';

// This is the currency used for the price setting.  A list of other pricing
// currencies supported is found at smartex.io
$smOptions['currency'] = 'ETH';

// Indicates whether anything is to be shipped with
// the order (if false, the buyer will be informed that nothing is
// to be shipped)
$smOptions['physical'] = 'true';

$smOptions['fullNotifications'] = 'true';

$smOptions['transactionSpeed'] = 'medium';
