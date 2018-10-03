<?php
require_once "stimulsoft/helper.php";
?>
<!DOCTYPE html>

<html>
<head>
	<title>Lab History</title>
	<link rel="stylesheet" type="text/css" href="css/stimulsoft.viewer.office2013.whiteblue.css">
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
				"6vJhGtLLLz2GNviWmUTrhSqnOItdDwjBylQzQcAOiHnjMjTzapbjRmELg6+FQd4m4nqcVzzFre9Ipxlh" +
				"zGE++hzfx5g2oyKfQpIEjuwzpuaURfvI7Tm0hM9VJHG8EDdA4Wh2KLTo8rBQKqHE0ocki90H8G4ED7j4" +
				"TSqAP0uYeajnI/aJVikzxFJ9hZTxQSgDP4bYnWppghezHGS/MV3xag9qlgjI41TG1G1mlltbH4UV+QUr" +
				"GNpqNgaUE52uXzNmcvMJ8HXK/LpweV+DFz7K5/yuBjTlkVe0yYWLJW5j4rY98PADxeLVmfCV5Yb7OCyI" +
				"8t0O82wQ1GG4tifj133C4t/tVGp9uQzeIfhcHHCr+syyk4Wa/9mz3ar5Pu+pwaaT3Ru7EePmIjW3nadO" +
				"2ckAbNxR7BWus7DnbGVZS9yNIb/jkqjoCBd5B5KMwL+2RnVoWsHQHF7arg3XxtWxLLZWBXr4gHNDdu4R" +
				"M6cAey3xJIdkQB9Q5wq4Rh+kKyAdsiMrROTz9QUIJDq05ka0WOn9OCDZXZKP4DnM6jod3xSREJMEHFsU" +
				"eOmoyNrrovRtUKcU";

			var report = new Stimulsoft.Report.StiReport();
			report.loadFile("reports/his_lab.mrt");

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