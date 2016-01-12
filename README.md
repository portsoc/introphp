# Install, Investigate and Experiment

Here are some introductory PHP examples.  To run them examples on your VM (which already has PHP installed for your convenience)...

1. Login to your VM
2. `git clone http://github.com/portsoc/introphp.git`
3. `php -S 0:8080 -t introphp`
4. Visit [127.0.0.1](http://127.0.0.1) in your preferred browser.

Try the examples, and then change them to your specifications.


# Echo

1. [The basic Hello World Program](/examples/10_echo/helloworld.php)
2. [Hello World Program with Variables and Concatenation](/examples/10_echo/helloPlusWorld.php)
3. [Hello World with Variables and Template Strings](/examples/10_echo/helloPlusWorldBetter.php)


# Numbers

1. [Simple arithmetic](/examples/20_numbers/add.php)
2. [Simple arithmetic with parameters and variables](/examples/20_numbers/addNumbers.php?a=100&b=2087) - *a, b*.
3. [Message loop](/examples/20_numbers/messageLoopHTML.php?msg=hello&count=5) - *msg, count*.
4. [Conditional Message loop](/examples/20_numbers/messageLoopHTMLConditional.php?msg=I%20am%20in%20a%20loop&count=50&mod=5) - *msg, count, mod*.


# Special Variables

1. PHP has a [several special variables](/examples/30_specials/serverVars.php) containing useful data.
1. [The special `phpinfo()` function](/examples/30_specials/phpinfo.php).


# Forms & Files

1. [Getting data from forms](/examples/40_forms/index.php) - *name*.
1. [Storing a list of visitors](/examples/40_forms/file.php) - *visitors.txt*.


# Includes

1. [Including other files](/examples/50_include/index.php).
