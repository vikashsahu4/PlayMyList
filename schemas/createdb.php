<?php

/**
 * Programmatically bootstrap the database
 *
 */

use \Phalcon\Db\Column,
    \Phalcon\Db\Index,
    \Phalcon\Db\Reference;

$config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../app/config/config.ini');

$dbclass = sprintf('\Phalcon\Db\Adapter\Pdo\%s', $config->database->adapter);
$dbh = new $dbclass(array(
	"host" => $config->database->host,
	"username" => $config->database->username,
	"password" => $config->database->password,
	"dbname" => $config->database->name
));

try {
	$dbh->begin();

	$query->createTable(
		"BankAccounts",
		null,
		array(
			"columns" => array(
				new Column("a_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
					'autoIncrement' => TRUE,
				)),
				new Column("a_type", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("a_name", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("c_id", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 40,
					'notNull' => TRUE,
				)),
			),
			"indexes" => array(
				new Index("PRIMARY", array("a_id")),
			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':a_id'=>$a_id,':a_type'=>$a_type,':a_name'=>$a_name,':c_id'=>$c_id));

/*	$query->execute("INSERT INTO `BankAccounts` VALUES (1,'Acme','31566564','Address','Hello'),(2,'Acme Inc','+44 564612345','Guildhall, PO Box 270, London','London')"); 
*/

	$query->createTable(
		"ChartOfAccounts",
		null,
		array(
			"columns" => array(
				new Column("coa_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
					'autoIncrement' => TRUE,
				)),
				new Column("c_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
				new Column("coa_name", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("coa_type", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("coa_head", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
				)),
				new Column("coa_input_acc", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
				)),
				new Column("coa_auto_tax", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
				)),
				new Column("coa_explanation", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
				)),
				new Column("coa_tax_percent", array(
					'type' => Column::TYPE_FLOAT,
				)),
			),
			"indexes" => array(
				new Index("PRIMARY", array("coa_id")),
			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':coa_id'=>$coa_id,':c_id'=>$c_id,':coa_name'=>$coa_name,':coa_head'=>$coa_head,':coa_input_acc'=>$coa_input_acc,':coa_auto_tax'=>$coa_auto_tax,':coa_explanation'=>$coa_explanation,':coa_tax_percent'=>$coa_tax_percent));
/* execute function */

$query->createTable(
		"Companies",
		null,
		array(
			"columns" => array(
				new Column("c_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
					'autoIncrement' => TRUE,
				)),
				new Column("c_name", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("c_type", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("c_address", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("c_city", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("c_state", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("c_country", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("c_zip", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
				new Column("c_date_format", array(
					'type' => Column::TYPE_DATETIME,
				)),
				new Column("c_fiscal_year", array(
					'type' => Column::TYPE_DATE,
				)),
				new Column("cur_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
				new Column("c_acc_type", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 20,
					'notNull' => TRUE,
				)),
				new Column("c_phone", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 20,
					'notNull' => TRUE,
				)),
				new Column("c_trial", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 25,
					'notNull' => TRUE,
				)),
				new Column("c_created_at", array(
					'type' => Column::TYPE_DATETIME,
				)),
				new Column("c_activation", array(
					'type' => Column::TYPE_CHAR,
					'size' => 10,
					'notNull' => TRUE,
				)),
				new Column("c_token", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 11,
					'notNull' => TRUE,
				)),
			),
			"indexes" => array(
				new Index("PRIMARY", array("c_id")),
			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':c_id'=>$c_id,':c_type'=>$c_type,':c_name'=>$c_name,':c_address'=>$c_address,':c_city'=>$c_city,':c_state'=>$c_state,':c_country'=>$c_country,':c_zip'=>$c_zip,':c_date_format'=>$c_date_format,':c_fiscal_yr'=>$c_fiscal_yr,':cur_id'=>$cur_id,':c_acc_type'=>$c_acc_type,':c_phone'=>$c_phone,':c_trail'=>$c_trail,':c_created_at'=>$c_created_at,':c_activation'=>$c_activation,':c_token'=>$c_token));
/* execution of companies */

	$query->createTable(
		"Currencies",
		null,
		array(
			"columns" => array(
				new Column("cur_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
					'autoIncrement' => TRUE,
				)),
				new Column("cur_code", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("cur_symbol", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 11,
					'notNull' => TRUE,
				)),

			),
			"indexes" => array(
				new Index("PRIMARY", array("a_id")),
			)
		)
	);
$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':cur_id'=>$cur_id,':cur_code'=>$cur_code,':cur_symbol'=>$cur_symbol));
/* execution of currencies */

	$query->createTable(
		"PackageCountries",
		null,
		array(
			"columns" => array(
			
				new Column("country_name", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("package_name", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("url", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("package_price", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':country_name'=>$country_name,':package_name'=>$package_name,':url'=>$url,':package_price'=>$package_price));
/*execution of package countries */

	$query->createTable(
		"Packages",
		null,
		array(
			"columns" => array(
				new Column("p_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
					'autoIncrement' => TRUE,
				)),
				new Column("package_name", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("monthly", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
				new Column("annually", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),

			),
			"indexes" => array(
				new Index("PRIMARY", array("p_id")),
			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':p_id'=>$p_id,':package_name'=>$package_name,':monthly'=>$monthly,':annually'=>$annually));
/*execute packages */



	$query->createTable(
		"Payments",
		null,
		array(
			"columns" => array(
				new Column("token_sa", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("url", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),

			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':token_sa'=>$token_sa,':url'=>$url));
/* execution of payments */

	$query->createTable(
		"PlanHelpers",
		null,
		array(
			"columns" => array(
				new Column("p_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
				)),
				new Column("c_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
				)),
				new Column("coa_head", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
				)),
				new Column("budget", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
				)),
				new Column("month", array(
					'type' => Column::TYPE_TEXT,
					'notNull' => TRUE,
				)),
				new Column("year", array(
					'type' => Column::TYPE_YEAR,
					'size' => 4,
					'notNull' => TRUE,
				)),

			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':p_id'=>$p_id,':c_id'=>$c_id,':coa_head'=>$coa_head,':budget'=>$budget,'month'=>$month,':year'=>$year));
/*execution of planhelper */



	$query->createTable(
		"Reminders",
		null,
		array(
			"columns" => array(
				new Column("c_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
				new Column("msg", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("rem_date", array(
					'type' => Column::TYPE_DATE,
				)),

			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':c_id'=>$c_id,':msg'=>$msg,':rem_date'=>$rem_date));

/*exec. of reminder */

	$query->createTable(
		"Requests",
		null,
		array(
			"columns" => array(
				new Column("req_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
					'autoIncrement' => TRUE,
				)),
				new Column("req_name", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("req_email", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("req_type", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("req_mask_ip", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("req_real_ip", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("req_came_from_url", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("req_date", array(
					'type' => Column::TYPE_DATETIME,
				)),
				new Column("req_act", array(
					'type' => Column::TYPE_CHAR,
					'size' => 10,
				)),
				new Column("req_act_date", array(
					'type' => Column::TYPE_DATETIME,
				)),
			),
			"indexes" => array(
				new Index("PRIMARY", array("req_id")),
			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':req_id'=>$req_id,':req_name'=>$req_name,':req_email'=>$req_email,':req_type'=>$req_type,':req_mask_ip'=>$req_mask_ip,':req_real_ip'=>$req_real_ip,':req_came_from_url'=>$req_came_from_url,':req_date'=>$req_date,':req_act'=>$req_act,':req_act_date'=>$req_act_date));

/* ex of req */

	$query->createTable(
		"Transactions",
		null,
		array(
			"columns" => array(
				new Column("t_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
					'autoIncrement' => TRUE,
				)),
				new Column("t_amount", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
				new Column("t_type_expense", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("t_tag", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("t_customer", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("tax", array(
					'type' => Column::TYPE_CHAR,
					'size' => 10,
					'notNull' => TRUE,
				)),
				new Column("account", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("t_goal", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("c_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
				new Column("t_date", array(
					'type' => Column::TYPE_DATETIME,
					'size' => 250,
					'notNull' => TRUE,
				)),
			),
			"indexes" => array(
				new Index("PRIMARY", array("t_id")),
			)
		)
	);

$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':t_id'=>$t_id, ':t_amount'=>$t_amount,':t_type_expense'=>$t_type_expense,':t_tag'=>$t_tag,':t_customer'=>$t_customer,':tax'=>$tax,':account'=>$account,':t_goal'=>$t_goal,':c_id'=>$c_id,':t_date'=>$t_date));
/*exe of trans */

	$query->createTable(
		"UserCompanies",
		null,
		array(
			"columns" => array(
				new Column("u_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
				new Column("c_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'notNull' => TRUE,
				)),
				new Column("role", array(
					'type' => Column::TYPE_CHAR,
					'size' => 20,
					'notNull' => TRUE,
				)),

			),
		)
	);


$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':u_id'=>$u_id,':c_id'=>$c_id,':role'=>$role));
/*exe of user companies */

	$query->createTable(
		"UserDetails",
		null,
		array(
			"columns" => array(
				new Column("u_id", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 11,
					'unsigned' => TRUE,
					'notNull' => TRUE,
					'autoIncrement' => TRUE,
				)),
				new Column("u_fname", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 50,
					'notNull' => TRUE,
				)),
				new Column("u_lname", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 50,
					'notNull' => TRUE,
				)),
				new Column("email", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("unique_reset", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 250,
					'notNull' => TRUE,
				)),
				new Column("u_ph_no", array(
					'type' => Column::TYPE_INTEGER,
					'size' => 15,
					'notNull' => TRUE,
				)),
				new Column("password", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 128,
					'notNull' => TRUE,
				)),
				new Column("salt", array(
					'type' => Column::TYPE_VARCHAR,
					'size' => 255,
					'notNull' => TRUE,
				)),
			),
			"indexes" => array(
				new Index("PRIMARY", array("u_id")),
			)
		)
	);
/* exe of userdetails */
$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$execute= $sth->execute(array(':u_id'=>$u_id,':u_fname'=>$u_fname,':u_lname'=>$u_lname,':email'=>$email,':unique_request'=>$unique_request,':u_ph_no'=>$u_ph_no,':password'=>$password,':salt'=>$salt));



	$dbh->commit();

} catch (Exception $e) {
	$query->rollback();
	echo $e->getTraceAsString();
}
