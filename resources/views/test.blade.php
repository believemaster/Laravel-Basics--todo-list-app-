Hello Laravel version 6

php artisan make:migrations create_targets_table --create=targets // always create migrations in plurals

// Create Table Data Using Tinker
// after running php artisan tinker

// Adding Data with the table fields i.e. target, ranking and saving at the end

// make $target object of Target Model inside App folder.
$target = new \App\Target();
$target->target = "Learning Laravel is Fast";
$target->ranking = "09";
$target->save();

$target = new \App\Target();
$target->target = "Laravel is better than Codeigniter";
$target->ranking = "09";
$target->save();

$target = new \App\Target();
$target->target = "Codeigniter development is rapid";
$target->ranking = "09";
$target->save();

// We can also create data by factories inside Database folder and load Model inside that to make
then "run php artisan tinker" and paste the code
factory(App\Target::class, 10)->create(); // to generate 10 random data if it does not create copy the following code inside Target model
protected $guarded = [];  // set which field cannot be injected
