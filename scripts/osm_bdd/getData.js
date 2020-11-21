async function getData()
{
	var response = await fetch("scripts/osm_bdd/points.php");
	var points = await response.json();

	return await points;

}