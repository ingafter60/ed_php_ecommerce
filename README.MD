# BUILDING ECOMMERCE WEBSITE USING PHP AND MYSQL

## 1. Basic setup

	λ git status
	On branch master

	No commits yet

	Changes to be committed:
	  (use "git rm --cached <file>..." to unstage)

	        new file:   .gitignore
	        new file:   README.MD
	        new file:   public/admin/.DS_Store
	        new file:   public/admin/_blank.html
	 		  ....	
	        new file:   resources/config.php
	        new file:   resources/functions.php

## 2. Template inheritance for index page

	λ git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   public/index.php
	        new file:   resources/templates/front/categories.php
	        new file:   resources/templates/front/footer.php
	        new file:   resources/templates/front/head.php
	        new file:   resources/templates/front/main_content.php
	        new file:   resources/templates/front/navbar.php
	        new file:   resources/templates/front/scripts.php
	        new file:   resources/templates/front/sliders.php

## 3. Create categories table

	CREATE TABLE `categories` (
		`cat_id` int(11) NOT NULL AUTO_INCREMENT,
		`cat_title` varchar(255) NOT NULL,
		PRIMARY KEY (`cat_id`)
	);

	mysql> DESC categories;
	+-----------+--------------+------+-----+---------+----------------+
	| Field     | Type         | Null | Key | Default | Extra          |
	+-----------+--------------+------+-----+---------+----------------+
	| cat_id    | int(11)      | NO   | PRI | NULL    | auto_increment |
	| cat_title | varchar(255) | NO   |     | NULL    |                |
	+-----------+--------------+------+-----+---------+----------------+
	2 rows in set (0.00 sec)

	λ git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   README.MD

## 4. Rendering categories items from the db to the homepage

	λ git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   README.MD
	        modified:   resources/templates/front/categories.php

## 5. Create custom helper functions

	λ git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   resources/functions.php

## 6. Create products table and added some entries

	CREATE TABLE `products` (
		`product_id` int(11) NOT NULL AUTO_INCREMENT,
		`product_title` varchar(255) NOT NULL,
		`product_category_id` int(11) NOT NULL,
		`product_price` float NOT NULL,
		`product_quantity` int(11) NOT NULL,
		`product_description` text NOT NULL,
		`short_desc` text NOT NULL,
		`product_image` varchar(255) NOT NULL,
		PRIMARY KEY (`product_id`)
	);

	mysql> DESC products  ;
	+---------------------+--------------+------+-----+---------+----------------+
	| Field               | Type         | Null | Key | Default | Extra          |
	+---------------------+--------------+------+-----+---------+----------------+
	| product_id          | int(11)      | NO   | PRI | NULL    | auto_increment |
	| product_title       | varchar(255) | NO   |     | NULL    |                |
	| product_category_id | int(11)      | NO   |     | NULL    |                |
	| product_price       | float        | NO   |     | NULL    |                |
	| product_quantity    | int(11)      | NO   |     | NULL    |                |
	| product_description | text         | NO   |     | NULL    |                |
	| short_desc          | text         | NO   |     | NULL    |                |
	| product_image       | varchar(255) | NO   |     | NULL    |                |
	+---------------------+--------------+------+-----+---------+----------------+
	8 rows in set (0.00 sec)

	λ git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   README.MD

## 7. Rendering products from db to home page

	λ git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   README.MD
	        modified:   public/index.php
	        modified:   resources/functions.php
	        modified:   resources/templates/front/main_content.php