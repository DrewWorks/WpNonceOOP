# WpNonceOOP
A compose package which serves the functionality of working with WordPress Nonces in object oriented environment


Table of contents:
 * [Requirements](#requirements)
 * [Installation](#installation)
 * [Usage](#usage)

## Requirements

* PHP >= 5.3.0
* WordPress >= 4.6

## Installation

You can install this class both on command-line or by pasting it into the root of your plugin directory.

### via Command-line

Using [Composer](https://getcomposer.org/), add Custom Nonce Class to your plugin's dependencies.

```sh
composer require okuley/wordpress-nonce:dev-master
```

### Another way

1. Download the [latest zip](https://github.com/niiokuley/WpNonceOOP/archive/master.zip) of this repo.
2. Unzip the master.zip file.
3. Copy and paste it into the root of your plugin directory.
4. Continue with your project.

## Usage

Setup the minimum required thigs:

```php
<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Nonces\WpNonce;


// Instantiate an object of the class
$nonce = new WpNonce();
```
### Examples

Adding a nonce to a URL:

```php
$url="/../wp-admin/post.php?post=48";
$complete_url = $nonce->wp_nonce_url( $url, 'edit-post_'.$post->ID );
```

Adding a nonce to a form:

```php
$nonce->get_wp_nonce_field( 'delete-post_'.$post_id );
```

creating a nonce:

```php
$newnonce = $nonce->wp_create_nonce( 'action_'.$post->id );
```

Verifying a nonce:

```php
$nonce->wp_verify_nonce_field( 'delete-post_'.$post_id );
```

Verifying a nonce passed in an AJAX request:

```php
$nonce->wp_check_ajax_referer( 'post-comment' );
```

Verifying a nonce passed in some other context:

```php
$nonce->wp_check_admin_referer( $_REQUEST['my_nonce'], 'edit-post_'.$post->ID );
```

