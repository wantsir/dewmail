<?php
/*
 * The MIT License (MIT)
 * 
 *  Copyright (c) 2014 Stephen Parker (stephenparker.io)
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *  
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Dewmail Demo</title>
		<style type="text/css">
		body { padding: 2em; }
		div.code, code {
			background-color: #eee;
			word-wrap: break-word;
			padding: 0.5em;
		}
		div.code { padding: 1em; }
		</style>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	<body>
		<h1>Dewmail Demo</h1>

                <h3>Recent Messages</h3>
                <p>
                        Try me! Send an email to <code><a href="mailto:test@demo.dewmail.org">test@demo.dewmail.org</a></code> and watch here.
                </p>
                <div class="code" id="dewmail-recent"></code>

		<!-- Firebase -->
		<script src="https://cdn.firebase.com/js/client/2.0.6/firebase.js"></script>
		<script type="text/javascript">
		var fb = new Firebase("<YOUR FIREBASE>");
		fb.limitToLast(5).on("child_added", function(data) {
			$("#dewmail-recent").prepend(JSON.stringify(data.val()) + "<br>");
		});
		</script>

	</body>
</html>
