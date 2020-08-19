<section id="search-multi" class="search-multi-top mt-20 clearfix">
  <div class="container">
    <div class="title">
      <h3>Kim cương viên</h3>
    </div>
    <div id="shape">
      <ul class="list-shape">
        <li class="selected">
            <label for="tron">
              <img width="60" src="images/icon-kc/HP_diamonds_round.svg" title="Tròn"><br/>
              <input type="checkbox" class="checkshape" id="tron" name="shap" value="0">
            </label>
        </li>
        <li>
            <label for="hatthoc">
              <img width="60"  src="images/icon-kc/HP_diamonds_marquise.svg" title="Hạt thóc"><br/>
              <input type="checkbox" class="checkshape" id="hatthoc" name="shap" value="1">
            </label>
        </li>
    
        <li>
            <label for="vuongnhongoc">
              <img width="60"  src="images/icon-kc/HP_diamonds_princess.svg" title="Vuông nhọn góc"><br/>
              <input type="checkbox" class="checkshape" id="vuongnhongoc" name="shap" value="2">
            </label>
        </li>
    
        <li>
             <label for="chunhatcatgoc">
              <img width="60"  src="images/icon-kc/HP_diamonds_radiant.svg" title="Chữ nhật cắt góc"><br/>
              <input type="checkbox" class="checkshape" id="chunhatcatgoc" name="shap" value="3">
            </label>
        </li>
    
        <li>
            <label for="chunhatxeptang">
              <img width="60"  src="images/icon-kc/HP_diamonds_emerald.svg" title="Chữ nhật xếp tầng"><br/>
              <input type="checkbox" class="checkshape" id="chunhatxeptang" name="shap" value="4">
            </label>
        </li>
    
        <li>
            <label for="traitim">
              <img width="60"  src="images/icon-kc/HP_diamonds_heart.svg" title="Trái tim"><br/>
              <input type="checkbox" class="checkshape" id="traitim" name="shap" value="5">
            </label>
        </li>
    
        <li>
            <label for="vuongcatgoc">
              <img width="60" src="images/icon-kc/HP_diamonds_asscher.svg" title="Vuông cắt góc"><br/>
              <input type="checkbox" class="checkshape" id="vuongcatgoc" name="shap" value="6">
            </label>
        </li>
    
        <li>
            <label for="quale">
              <img width="60" src="images/icon-kc/HP_diamonds_pear.svg" title="Quả lê"><br/>
              <input type="checkbox" class="checkshape" id="quale" name="shap" value="7">
            </label>
        </li>
    
        <li>
            <label for="oval">
              <img width="60" src="images/icon-kc/HP_diamonds_oval.svg" title="Oval"><br/>
              <input type="checkbox" class="checkshape" id="oval" name="shap" value="8">
            </label>
        </li>
    
        <li>
          <label for="vuongbogoc">
              <img width="60" src="images/icon-kc/HP_diamonds_cushion.svg" title="Vuông bo góc"><br/>
              <input type="checkbox" class="checkshape" id="vuongbogoc" name="vuongbogoc" value="9">
            </label>
        </li>
      </ul>
      <input type="hidden" id="input-images-slider" value="" />
    </div>
    <div class="box-range">
      <div class="item-range">
        <label>Giá</label>
        <div class="range">
          <div id="price-slider"></div>
        </div>
        <div class="itemlala">
          <input type="text" id="input-min-price" value="1000000.00" />
          <input type="text" id="input-max-price" value="1000000000.00"/>
        </div>
      </div>
      <div class="item-range">
        <label>Độ tinh khiết</label>
        <div class="range"><div id="clarity-slider"></div></div>
        <input type="hidden" id="input-clarity-slider" value="si2,si1,vs2,vs1,vvs2,vvs1,if,fl" />
      </div>
      <div class="item-range">
        <label>Định lượng (mm/ly)</label>
        <div class="range"><div id="width-slider"></div></div>
        <div class="itemlala">
          <input type="text" id="input-min-width" value="3.60" />
          <input type="text" id="input-max-width" value="20.00" />
        </div>
      </div>
      <div class="item-range">
        <label>Màu</label>
        <div class="range"><div id="color-slider"></div></div>
        <input type="hidden" id="input-color-slider" value="j,i,h,g,f,e,d" />
      </div>
    </div>
  </div>
</section>