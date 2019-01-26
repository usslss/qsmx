<?php
$sql_our_brand = "SELECT * FROM brand  ORDER BY brand_id ASC";

$result = mysqli_query($link, $sql_our_brand);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $ourBrandArr[$i]["url"] = $row["brand_logo_large_url"];
    $i++;
}


?>
		<div class="about-brand">
			<div class="w-1240">
				<div class="about-title">
					<h3>Our Brand</h3>
					<span>旗下品牌</span>
				</div>
				<ul>
<?php
for ($i = 0; $i < 5; $i++) {
    //如果对标题的长度有限制
    echo <<< EOT
					<li>
						<img src="{$ourBrandArr[$i]["url"]}">
					</li>                 
EOT;
}
?>
					<div class="clearfix"></div>
				</ul>
			</div>
		</div>