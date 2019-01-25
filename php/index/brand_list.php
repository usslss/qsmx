<?php
$sql_brand = "SELECT * FROM brand WHERE brand_website='{$website}'";
$result = mysqli_query($link, $sql_brand);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $brandArr[$i]["brand_name"] = $row["brand_name"];
    $brandArr[$i]["brand_text"] = $row["brand_text"];
    $brandArr[$i]["brand_logo_url"] = $row["brand_logo_url"];
    $brandArr[$i]["brand_url"] = $row["brand_url"];
    $brandArr[$i]["brand_year"] = substr($row["brand_year"],0,4);
    

    $sql_brand_img = "SELECT url FROM img WHERE class='{$brandArr[$i]["brand_name"]}' AND website='{$website}'";
    $result2 = mysqli_query($link, $sql_brand_img);
    $j=0;
    while ($row = mysqli_fetch_assoc($result2)) {
        $imgArr[$i][$j] = $row["url"];
        $j++;
    }
    $i++;
}
$brandSum=$i;
?>

		<div class="brand container">
			<ul>
				<li>
					<div class="fl brand-word ml180">
						<img src="<?php echo $brandArr[0]["brand_logo_url"]?>">
						<h3><?php echo $brandArr[0]["brand_year"]?></h3>
						<p><?php echo $brandArr[0]["brand_text"]?>
						</p>
						<a href="<?php echo $brandArr[0]["brand_url"]?>" target="_blank" class="dj"><span>MORE</span></a>
					</div>
					<div class="fr brand-pic">
						<div class="swiper-container lht">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[0][0]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[0][1]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[0][2]?>">
								</div>
							</div>
							<div class="swiper-pagination lht-c"></div>
						</div>
					</div>
				</li>

				<li class="ml200">
					<div class="fl brand-pic">
						<div class="swiper-container mywm">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[1][0]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[1][1]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[1][2]?>">
								</div>

							</div>
							<div class="swiper-pagination mywm-c"></div>
						</div>
					</div>
					<div class="fr brand-word mr180">
						<img src="<?php echo $brandArr[1]["brand_logo_url"]?>">
						<h3><?php echo $brandArr[1]["brand_year"]?></h3>
						<p><?php echo $brandArr[1]["brand_text"]?>
						</p>
						<a href="<?php echo $brandArr[1]["brand_url"]?>" target="_blank" class="dj"><span>MORE</span></a>

					</div>
				</li>

				<li>
					<div class="fl brand-word ml180">
						<img src="<?php echo $brandArr[2]["brand_logo_url"]?>">
						<h3><?php echo $brandArr[2]["brand_year"]?></h3>
						<p><?php echo $brandArr[2]["brand_text"]?>
						</p>
						<a href="<?php echo $brandArr[2]["brand_url"]?>" target="_blank" class="dj"><span>MORE</span></a>
					</div>
					<div class="fr brand-pic">
						<div class="swiper-container lw">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[2][0]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[2][1]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[2][2]?>">
								</div>
							</div>
							<div class="swiper-pagination lw-c"></div>
						</div>
					</div>
				</li>

				<li class="ml200">
					<div class="fl brand-pic">
						<div class="swiper-container dc">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[3][0]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[3][1]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[3][2]?>">
								</div>

							</div>
							<div class="swiper-pagination dc-c"></div>
						</div>
					</div>
					<div class="fr brand-word mr180">
						<img src="<?php echo $brandArr[3]["brand_logo_url"]?>">
						<h3><?php echo $brandArr[3]["brand_year"]?></h3>
						<p><?php echo $brandArr[3]["brand_text"]?>
						</p>
						<a href="<?php echo $brandArr[3]["brand_url"]?>" target="_blank" class="dj"><span>MORE</span></a>

					</div>
				</li>

				<li>
					<div class="fl brand-word ml180">
						<img src="<?php echo $brandArr[4]["brand_logo_url"]?>">
						<h3><?php echo $brandArr[4]["brand_year"]?></h3>
						<p><?php echo $brandArr[4]["brand_text"]?>
						</p>
						<a href="<?php echo $brandArr[4]["brand_url"]?>" target="_blank" class="dj"><span>MORE</span></a>
					</div>
					<div class="fr brand-pic">
						<div class="swiper-container dc1">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[4][0]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[4][1]?>">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $imgArr[4][2]?>">
								</div>
							</div>
							<div class="swiper-pagination dc1-c"></div>
						</div>
					</div>
				</li>

			</ul>
		</div>