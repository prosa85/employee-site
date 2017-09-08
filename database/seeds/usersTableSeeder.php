<?php

use Illuminate\Database\Seeder;

use App\User;
class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users=[
			["username" => "prosa", 	"name" 	=> 	"Pablo Rosa", 		"email" => 	"prosa@link-systems.com", 		"job_title" => 	"Developer", 				"role" =>"Admin",		"password" =>	bcrypt("321654")],
			["username" => "mburns", "name" 	=> 	"Micheal Burns", 	"email" => 	"mburns@link-systems.com", 		"job_title" => 	"Content Director", 		"role" =>"Admin",		"password" =>	bcrypt("mburns")],
			["username" => "svelic", "name" 	=> 	"Sanel Velic", 		"email" => 	"svelic@link-systems.com", 		"job_title" => 	"Operations Manager", 		"role" =>"Admin",		"password" =>	bcrypt("svelic")],
			["username" => "bstevens", "name" 	=> 	"Ben Stevens", 		"email" => 	"bstevens@link-systems.com", 	"job_title" => 	"Project Manager", 			"role" =>"Staff",		"password" =>	bcrypt("bstevens")],
			["username" => "dradix", "name" 	=> 	"Derek Radix", 		"email" => 	"dradix@link-systems.com", 		"job_title" => 	"Production Coordinator",	"role" =>"Staff",		"password" =>	bcrypt("dradix")],
			["username" => "dtam", 	"name" 		=> 	"Doug Tam", 		"email" => 	"dtam@link-systems.com", 		"job_title" => 	"Production Coordinator",	"role" =>"Staff",		"password" =>	bcrypt("dtam")],
			["username" => "mriess", "name" 	=> 	"Melissa Riess", 	"email" => 	"mriess@link-systems.com", 		"job_title" => 	"Production Coordinator",	"role" =>"Staff",		"password" =>	bcrypt("mriess")],
			["username" => "byacob", "name" 	=> 	"Baha Ikzer", 		"email" => 	"byacob@link-systems.com", 		"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("byacob")],
			["username" => "cmurphy", "name" 	=> 	"Clifford Murphy", 	"email" => 	"cmurphy@link-systems.com", 	"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("cmurphy")],
			["username" => "jhuesman", "name" 	=> 	"John Huesman", 	"email" => 	"jhuesman@link-systems.com", 	"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("jhuesman")],
			["username" => "jgray", 	"name" 	=> 	"Johnathan Gray", 	"email" => 	"jgray@link-systems.com", 		"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("jgray")],
			["username" => "jandrews", "name" 	=> 	"Jon Andrews", 		"email" => 	"jandrews@link-systems.com", 	"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("jandrews")],
			["username" => "jbaldon", "name" 	=> 	"Jonathon Baldon", 	"email" => 	"jbaldon@link-systems.com", 	"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("jbaldon")],
			["username" => "jdonato", "name" 	=> 	"Josh Donato", 		"email" => 	"jdonato@link-systems.com", 	"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("jdonato")],
			["username" => "khivner", "name" 	=> 	"Kyle Hivner", 		"email" => 	"khivner@link-systems.com", 	"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("khivner")],
			["username" => "krodby", "name" 	=> 	"Kyle Rodby", 		"email" => 	"krodby@link-systems.com", 		"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("krodby")],
			["username" => "mchae", 	"name" 	=> 	"Mitchell Chea", 	"email" => 	"mchae@link-systems.com", 		"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("mchae")],
			["username" => "rstevenson", "name"	=> 	"Roberta Stevenson","email" => 	"rstevenson@link-systems.com", 	"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("rstevenson")],
			["username" => "tgawron", "name" 	=> 	"Theodore Gawron", 	"email" => 	"tgawron@link-systems.com", 	"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("tgawron")],
			["username" => "tbackus", "name" 	=> 	"Timothy Backus", 	"email" => 	"tbackus@link-systems.com", 	"job_title" => 	"Content Author", 		 	"role" =>"Staff",		"password" =>	bcrypt("tbackus")],
			["username" => "jboulton", "name" 	=> 	"Jessica Boulton", 	"email" => 	"jboulton@link-systems.com", 	"job_title" => 	"Content Author (Contract)","role" =>"Staff",		"password" =>	bcrypt("jboulton")],
			["username" => "mmcintosh", "name" 	=> 	"Michael McIntosh", "email" => 	"mmcintosh@link-systems.com", 	"job_title" => 	"Content Author (Contract)","role" =>"Staff",		"password" =>	bcrypt("mmcintosh")],

		];
		
		foreach ($users as $user) {
			User::create($user);
		}
    }
}
