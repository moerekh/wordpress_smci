<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<?php
	function get_saved_users($output_type=ARRAY_A)
	{
		$mydb  = new wpdb("wordpressdb", "password", "wpdemo", "localhost");
		$query = "SELECT * FROM contact_form_backup;";
		return $mydb->get_results($query);
	}
	$data = get_saved_users(OBJECT_K);
?>


<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		<div>
			<table>
				<thead>
					<tr>
						<td colspan=4>
							Refresh the page to update the table.
						</td>
					</tr>
					<tr>
						<th>first</th>
						<th>last</th>
						<th>email</th>
						<th>date</th>
					</tr>
				</thead>
				<tbody>
					<?php for ($i = 0; $i < count($data); $i++): ?>
						<tr>
							<td><?php echo $data[$i]->first_name; ?></td>
							<td><?php echo $data[$i]->last_name; ?></td>
							<td><?php echo $data[$i]->email; ?></td>
							<td><?php echo $data[$i]->date_submitted; ?></td>
						</tr>
					<?php endfor; ?>
				</tbody>
			</table>
		</div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
