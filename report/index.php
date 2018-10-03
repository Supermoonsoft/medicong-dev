<?php
require_once "stimulsoft/helper.php";
?>
<!DOCTYPE html>

<html>
<head>
	<title>EMR Report</title>
	<link rel="stylesheet" type="text/css" href="css/stimulsoft.viewer.office2013.whiteteal.css">
	<script type="text/javascript" src="scripts/stimulsoft.reports.js"></script>
	<script type="text/javascript" src="scripts/stimulsoft.viewer.js"></script>

	<?php
		$options = StiHelper::createOptions();
		$options->handler = "handler.php";
		$options->timeout = 30;
		StiHelper::initialize($options);
	?>
	<script type="text/javascript">
		function Start() {
			Stimulsoft.Base.StiLicense.key =
				"6vJhGtLLLz2GNviWmUTrhSqnOItdDwjBylQzQcAOiHm2Fet7sLf2OCBW7CFzi24RU/KV3gPT3fOr6Owc" +
				"7LDdTgoUpEIHdTlKP3tJ2W3e/G6AMqEOrRtF2xTCsXqBqn7mv1GTDZxi6tjquhxs7MxgXZQY9LFfxzkY" +
				"/EikzDlWVCyXmsqmkBNEJyOhBA3aRsRDEodlmIP7jy8hIKMNktc0+A5ZVf9nqvXxGBrr1MeT5RGj4uWT" +
				"8Ajj9FNhK5P7kjRavKam4/1dVu2j4z8ro7wHPQrmMa0T3yKoZ6bR/DC0va/IwtsQt3PiG/jnm7H0dW42" +
				"KR+Kd/v1atWQyJTBofQ8UORosp8F+rtnXMlB5gEWLsoxn3oIE7i+nHS/24cfkBwijfxILUL3dyx0qXsX" +
				"WbKonuAUGuCcFkG0yoaemTaeKUqkhagMQfalWB4PLa6kNGZuuuWDFMvYyqCGwJIz8g2SM2Pc6U/LtH/1" +
				"zfZkG5xLup5+R8bv5n6zIoWO/GAPm/nVThV7E+y/oibxZVRRGIgWS6aqco630JAYdtt32qYjpWWIN42M" +
				"tV4qdfgrOOOk02xX";

			var report = new Stimulsoft.Report.StiReport();
			report.loadFile("reports/stickerDrug_pcc.mrt");

			var options = new Stimulsoft.Viewer.StiViewerOptions();
			var viewer = new Stimulsoft.Viewer.StiViewer(options, "StiViewer", false);

			viewer.onBeginProcessData = function (args, callback) {
				<?php StiHelper::createHandler(); ?>
			}

			viewer.report = report;
			viewer.renderHtml("viewerContent");
		}
	</script>
</head>
<body onload="Start()">
	<div id="viewerContent"></div>
</body>
</html>