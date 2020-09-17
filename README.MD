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

## 8. Rendering products from db to home page part 2

	λ git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   README.MD
	        modified:   public/index.php
	        modified:   resources/functions.php
	        modified:   resources/templates/front/main_content.php

## 9. Rendering page detail/item

	λ git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   README.MD
	        modified:   resources/functions.php

## 10. Rendering category page

	λ git status
	On branch master
	Your branch is ahead of 'origin/master' by 1 commit.
	  (use "git push" to publish your local commits)

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   README.MD
	        modified:   resources/functions.php
	        modified:   resources/templates/front/categories.php

## 11. Spliting home and detail pages to components and common

	λ git status
	On branch master
	Your branch is ahead of 'origin/master' by 2 commits.
	  (use "git push" to publish your local commits)

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   README.MD
	        modified:   public/index.php
	        modified:   public/item.php
	        modified:   resources/config.php
	        modified:   resources/functions.php
	        renamed:    resources/templates/front/categories.php -> resources/templates/front/common/categories.php
	        renamed:    resources/templates/front/footer.php -> resources/templates/front/common/footer.php
	        renamed:    resources/templates/front/head.php -> resources/templates/front/common/head.php
	        renamed:    resources/templates/front/navbar.php -> resources/templates/front/common/navbar.php
	        renamed:    resources/templates/front/scripts.php -> resources/templates/front/common/scripts.php
	        new file:   resources/templates/front/detail-components/image.php
	        new file:   resources/templates/front/detail-components/tab-panel.php
	        renamed:    resources/templates/front/main_content.php -> resources/templates/front/home-components/main_content.php
	        renamed:    resources/templates/front/sliders.php -> resources/templates/front/home-components/sliders.php

## 12. Rendering data to detail page

	λ git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes to be committed:
	  (use "git reset HEAD <file>..." to unstage)

	        modified:   README.MD
	        modified:   resources/config.php
	        new file:   resources/database.php
	        modified:   resources/templates/front/detail-components/image.php

## 13. Re-modifying the codes Using Procedural style

λ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        modified:   resources/templates/front/common/categories.php
        modified:   resources/templates/front/detail-components/image.php
        modified:   resources/templates/front/home-components/main_content.php