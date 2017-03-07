<?php echo $header; ?>
<div id="content">
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <div class="box">
    <div class="heading">
      <h1><img src="view/image/shipping.png" alt="" /> <?php echo $heading_title; ?></h1>
      <div class="buttons"><a href="<?php echo $cancel; ?>" class="button"><?php echo $button_cancel; ?></a></div>
    </div>
    <div class="content">
      <div>
        <div style="padding:15px;text-align: center; vertical-align:bottom;">
          <a href="http://www.freterapido.com" target="_blank">
            <img src="https://freterapido.com/imgs/frete_rapido.png" style="margin: auto" />
          </a>
          <div style="padding-top: 20px;">
            Em caso de dúvidas, reporte de bugs ou sugestão de melhorias, acesse a <a href="https://github.com/freterapido/opencart_1.5.x_cpf_checkout" target="_blank"<name />documentação deste módulo no Github</a>.
            </br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>
