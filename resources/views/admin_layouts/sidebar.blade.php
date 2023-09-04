 <div class="dlabnav">
			<div class="dlabnav-scroll">	
				<ul class="metismenu" id="menu">
                 
					<li><a class=" " href="{{ url('/admin') }}" aria-expanded="false">
							<i class="material-symbols-outlined">home</i>
							<span class="nav-text">Dashboard</span>
						</a>
                       
						

					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">category</i>
						<span class="nav-text">Catégorie</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="{{ url('/add.category') }}">Ajouter Catégorie</a></li>
						<li><a href="{{ url('/list.category') }}">Catégories</a></li>
						
					</ul>

					</li>

                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">toggle_on</i>
						<span class="nav-text">Sliders</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="{{ url('/add.slider') }}">Ajouter slider</a></li>
						<li><a href="{{ url('/slider') }}">Slider</a></li>

						
					</ul>
                 
					</li>

                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">production_quantity_limits</i>
						<span class="nav-text">Products</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="{{ url('/add.produit') }}">Ajouter produit</a></li>
						<li><a href="{{ url('/produit') }}">Produits</a></li>

						
					</ul>

					</li>

                    <li><a class="has-arrow " href="{{ url('/orders') }}" aria-expanded="false">
						<i class="material-symbols-outlined">folder</i>
						<span class="nav-text">Orders</span>
					</a>

					</li>
			
				
				</ul>
				<div class="copyright">
					<p><strong>School Admission Dashboard</strong></p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
				</div>
			</div>
        </div>