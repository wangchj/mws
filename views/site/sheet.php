<div class="row">
    <div class="col-xs-12" style="height:80px; border:1px solid #888; text-align:center; vertical-align:middle;margin-bottom:40px">
        <div style="margin-top:20px">Header</div>
    </div>
</div>

<?php for($i = 0; $i < count($problems); $i++):?>
<div class="row" style="margin-top:40px">
    <div class="col-xs-12"><?=$i + 1?>.&nbsp;&nbsp;<?= '\(' . $problems[$i] . '\)' ?></div>
</div>
<?php endfor;?>

<math display="block">
          <mstyle>
            <mi>f</mi>
            <mrow>
              <mo>(</mo>
              <mi>a</mi>
              <mo>)</mo>
            </mrow>
            <mo>=</mo>
            <mfrac>
              <mn>1</mn>
              <mrow>
                <mn>2</mn>
                <mi>π
                  <!-- π -->
                </mi>
                <mi>i</mi>
              </mrow>
            </mfrac>
            <msub>
              <mo>∮</mo>
              <mrow>
                <mi>γ</mi>
              </mrow>
            </msub>
            <mfrac>
              <mrow>
                <mi>f</mi>
                <mo>(</mo>
                <mi>z</mi>
                <mo>)</mo>
              </mrow>
              <mrow>
                <mi>z</mi>
                <mo>−</mo>
                <mi>a</mi>
              </mrow>
            </mfrac>
            <mi>d</mi>
            <mi>z</mi>
          </mstyle>
        </math>