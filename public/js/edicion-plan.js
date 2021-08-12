$(document).on('ready', funcPrincipal);

function funcPrincipal ()
{
	$("#btnNuevoCuentadante").on ('click', funcNuevoCuentadante);
}
function funcNuevoCuentadante()
{
	$("#tablaCuentadantes")
	.append
	(
		$('<tr>')
		.append
		(
			$('<td>')
			.append
			(
				$('<input').attr('type', 'text').addclass('form-control')

				)


			)


		);

}