<!-- SELECT products.id, category.type_category FROM products LEFT JOIN category ON products.id=category.type_category -->


<!-- SELECT products.id, podcategory.podcategory_type, category.type_category FROM products 
LEFT JOIN category ON products.id=category.type_category LEFT JOIN podcategory ON podcategory.podcategory_type=category.type_category -->


<!-- SELECT products.id, category.type_category FROM products
LEFT JOIN products_type ON products_type.products.id=uproducts.id
LEFT JOIN category ON products_type.id=category.type_category -->


<!-- SELECT products.id as products_id, product.name as product_name FROM products
LEFT JOIN products as product ON product.id=products.products_id -->


<!-- SELECT users.name as user_name, fathers.name as father_name, mother.name as mother_name FROM users
LEFT JOIN users as fathers ON fathers.id=users.father_id
LEFT JOIN users as mother ON mother.id=users.mother_id -->


