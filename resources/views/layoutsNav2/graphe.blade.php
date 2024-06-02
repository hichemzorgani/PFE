@include('partials.nav2')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<!-- My CSS -->
	<link rel="stylesheet">

	<title>Dashboard</title>
</head>
<body>

	<!-- CONTENT -->
	<section id="content">
		

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
          
					<h1><i class='bx bxs-dashboard'></i> Dashboard</h1>
					
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bx-globe'></i>
					<span class="text">
						<h3>{{$C0}}</h3>
						<p>Tous les stages</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-check-circle'></i>
					<span class="text">
						<h3>{{$C1}}</h3>
						<p>Stages cloturés</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-alarm'></i>
					<span class="text">
						<h3>{{$C2}}</h3>
						<p>Stages en cours</p>
					</span>
				</li>
        <li>
          <i class='bx bxs-shield-x'></i>
					<span class="text">
						<h3>{{$C3}}</h3>
						<p>Stages annulés</p>
					</span>
				</li>
			</ul>

			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Dernières activités </h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div class="scrollable-table">
					<table>
						<thead>
							<tr>
								<th>Nom</th>
								<th>Type</th>
                       			<th>Date</th>
								<th>Action</th>
                
							</tr>
						</thead>


<!--------------------------------------------------------------------------------------------------------------------------------------------------->
          
          @foreach ($affectations as $affectation)
            @if (- now()->diffInDays($affectation->created_at)  < 1)
						<tbody>
							<tr>
								<td>{{$affectation->nom}}</td>
								<td>structure d'affectation</td>
                                <td>{{$affectation->created_at}}</td>
								<td><span class="status completed">Ajouté</span></td>
							</tr>
              @endif
            @if (- now()->diffInDays($affectation->updated_at)  < 1 && $affectation->created_at != $affectation->updated_at)
							<tr>
								<td>{{$affectation->nom}}</td>
								<td>Structure d'affectation</td>
                                <td>{{$affectation->updated_at}}</td>
								<td><span class="status process">Modifié</span></td>
							</tr>
              @endif
			  @if (- now()->diffInDays($affectation->deleted_at)  < 1)

							
							<tr>
								<td>{{$affectation->nom}}</td>
								<td>Structure d'affectation</td>
                                <td>{{$affectation->deleted_at}}</td>
								<td><span class="status pending">Supprimé</span></td>
							</tr> 
              @endif
              @endforeach

              @foreach ($stages as $stage)
            @if (- now()->diffInDays($stage->created_at)  < 1)
						<tbody>
							<tr>
								<td>{{$stage->theme}}</td>
								<td>Stage</td>
               					<td>{{$stage->created_at}}</td>
								<td><span class="status completed">Ajouté</span></td>
							</tr>
              @endif
            @if (- now()->diffInDays($stage->updated_at)  < 1 && $stage->created_at != $stage->updated_at)
							<tr>
								<td>{{$stage->theme}}</td>
								<td>Stage</td>
                                <td>{{$stage->updated_at}}</td>
								<td><span class="status process">Modifié</span></td>
							</tr>
              @endif
			  @if (- now()->diffInDays($stage->deleted_at)  < 1)
							
							<tr>
								<td>{{$stage->theme}}</td>
								<td>Stage</td>
                                <td>{{$stage->deleted_at}}</td>
								<td><span class="status pending">Supprimé</span></td>
							</tr> 
			  @endif
              @endforeach

              @foreach ($universites as $universite)
            @if (- now()->diffInDays($universite->created_at)  < 1)
						<tbody>
							<tr>
								<td>{{$universite->nom}}</td>
								<td>Université</td>
               				    <td>{{$universite->created_at}}</td>
								<td><span class="status completed">Ajouté</span></td>
							</tr>
              @endif
            @if (- now()->diffInDays($universite->updated_at)  < 1 && $universite->created_at != $universite->updated_at)
							<tr>
								<td>{{$universite->nom}}</td>
								<td>Université</td>
               				    <td>{{$universite->updated_at}}</td>
								<td><span class="status process">Modifié</span></td>
							</tr>
              @endif
			  @if (- now()->diffInDays($universite->deleted_at)  < 1)
							
							<tr>
								<td>{{$universite->nom}}</td>
								<td>Université</td>
                                <td>{{$universite->deleted_at}}</td>
								<td><span class="status pending">Supprimé</span></td>
							</tr> 
			  @endif
              @endforeach

              @foreach ($encadrants as $encadrant)
            @if (- now()->diffInDays($encadrant->created_at)  < 1)
						<tbody>
							<tr>
								<td>{{$encadrant->nom}}</td>
								<td>Encadrant</td>
                <td>{{$encadrant->created_at}}</td>
								<td><span class="status completed">Ajouté</span></td>
							</tr>
              @endif
            @if (- now()->diffInDays($encadrant->updated_at)  < 1 && $encadrant->created_at != $encadrant->updated_at)
							<tr>
								<td>{{$encadrant->nom}}</td>
								<td>Encadrant</td>
              				    <td>{{$encadrant->updated_at}}</td>
								<td><span class="status process">Modifié</span></td>
							</tr>
              @endif
			  @if (- now()->diffInDays($encadrant->deleted_at)  < 1)
							
							<tr>
								<td>{{$encadrant->nom}}</td>
								<td>Encadrant</td>
                                <td>{{$encadrant->deleted_at}}</td>
								<td><span class="status pending">Supprimé</span></td>
							</tr> 
			  @endif
              @endforeach

              @foreach ($ecoles as $ecole)
            @if (- now()->diffInDays($ecole->created_at)  < 1)
						<tbody>
							<tr>
								<td>{{$ecole->nom}}</td>
								<td>Structure IAP</td>
                <td>{{$ecole->created_at}}</td>
								<td><span class="status completed">Ajouté</span></td>
							</tr>
              @endif
            @if (- now()->diffInDays($ecole->updated_at)  < 1 && $ecole->created_at != $ecole->updated_at)
							<tr>
								<td>{{$ecole->nom}}</td>
								<td>Structure IAP</td>
               				    <td>{{$ecole->updated_at}}</td>
								<td><span class="status process">Modifié</span></td>
							</tr>
              @endif
			  @if (- now()->diffInDays($ecole->deleted_at)  < 1)
							
							<tr>
								<td>{{$ecole->nom}}</td>
								<td>Structure IAP</td>
                                <td>{{$ecole->deleted_at}}</td>
								<td><span class="status pending">Supprimé</span></td>
							</tr> 
			  @endif
              @endforeach
							
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------->
						</tbody>
					</table>
				</div>
				</div>
				<div class="todo">
          
					<div class="container">
            <h3 style="font-size: 24px; font-weight: 600;color: var(--dark);">Niveau des stages</h3>
            <div class="d-flex justify-content-center row mt-5">
              <div class="col-10">
                
                <canvas id="bar-chart"></canvas>
                
              </div>
            </div>
          </div>
      
          <!-- Your other scripts -->
          <script type="text/javascript">
            // Chart data
            
            const dataBar = {
              type: 'pie',
              data: {
                labels: ["Licence","Master","Doctorat","Ingénier","Technicien supérieur"],
                datasets: [{
                  label: 'Traffic',
                  data: [ {{$li}},{{$ma}},{{$do}},{{$in}},{{$ts}}],
                  backgroundColor: [
                    "#3C91E6",
                    "#FFCE26",
                    "#AAAAAA",
                    "#DB504A",
                    "green",

                  ],//'rgb(219, 145, 8)',  Background color
                  borderColor: 'gray', // Border color
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true,
                    ticks: {
                      stepSize: 2, // Adjust step size as needed
                      callback: function (value) {
                        return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                      }
                    }
                  }
                }
              }
            };
      
            // Create the chart
            new Chart(document.getElementById('bar-chart'), dataBar);
          </script>
          
				</div>
        
        
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
.scrollable-table {
        max-height: 360px; /* Set the maximum height for the table */
        overflow-y: scroll; /* Enable vertical scrolling */
    }

a {
	text-decoration: none;
}

li {
	list-style: none;
}

:root {
	--poppins: 'Poppins', sans-serif;
	--lato: 'Lato', sans-serif;

	--light: #F9F9F9;
	--blue: #2478cc;
	--light-blue: #CFE8FF;
	--grey: #eee;
	--dark-grey: #AAAAAA;
	--dark: #342E37;
	--red: #DB504A;
  --light-red: #ffb2af;
	--yellow: #FFCE26;
	--light-yellow: #FFF2C6;
	--orange: #FD7238;
	--light-orange: #FFE0D3;
  --green: #0d9f0d;
  --light-green: #a7ffa7;
}

html {
	overflow-x: hidden;
}

body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}

body {
	background: var(--grey);
	overflow-x: hidden;
}






/* CONTENT */

#sidebar.hide ~ #content {
	width: calc(100% - 60px);
	left: 60px;
}


/* MAIN */
#content main {
	width: 100%;
	padding: 36px 24px;
	font-family: var(--poppins);
	max-height: calc(100vh - 56px);
	overflow-y: auto;
}
#content main .head-title {
	display: flex;
	align-items: center;
	justify-content: space-between;
	grid-gap: 16px;
	flex-wrap: wrap;
}
#content main .head-title .left h1 {
	font-size: 36px;
	font-weight: 600;
	margin-bottom: 10px;
	color: var(--dark);
}
#content main .head-title .left .breadcrumb {
	display: flex;
	align-items: center;
	grid-gap: 16px;
}
#content main .head-title .left .breadcrumb li {
	color: var(--dark);
}
#content main .head-title .left .breadcrumb li a {
	color: var(--dark-grey);
	pointer-events: none;
}
#content main .head-title .left .breadcrumb li a.active {
	color: var(--blue);
	pointer-events: unset;
}
#content main .head-title .btn-download {
	height: 36px;
	padding: 0 16px;
	border-radius: 36px;
	background: var(--blue);
	color: var(--light);
	display: flex;
	justify-content: center;
	align-items: center;
	grid-gap: 10px;
	font-weight: 500;
}




#content main .box-info {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 24px;
	margin-top: 36px;
}
#content main .box-info li {
	padding: 24px;
	background: var(--light);
	border-radius: 20px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
}
#content main .box-info li .bx {
	width: 80px;
	height: 80px;
	border-radius: 10px;
	font-size: 36px;
	display: flex;
	justify-content: center;
	align-items: center;
}
#content main .box-info li:nth-child(1) .bx {
	background: var(--light-blue);
	color: var(--blue);
}
#content main .box-info li:nth-child(2) .bx {
	background: var(--light-green);
	color: var(--green);
}
#content main .box-info li:nth-child(3) .bx {
	background: var(--dark-grey);
	color: var(--dark);
}
#content main .box-info li:nth-child(4) .bx {
	background: var(--light-orange);
	color: var(--red);
}
#content main .box-info li .text h3 {
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
}
#content main .box-info li .text p {
	color: var(--dark);	
}





#content main .table-data {
	display: flex;
	flex-wrap: wrap;
	grid-gap: 24px;
	margin-top: 24px;
	width: 100%;
	color: var(--dark);
}
#content main .table-data > div {
	border-radius: 20px;
	background: var(--light);
	padding: 24px;
	overflow-x: auto;
}
#content main .table-data .head {
	display: flex;
	align-items: center;
	grid-gap: 16px;
	margin-bottom: 24px;
}
#content main .table-data .head h3 {
	margin-right: auto;
	font-size: 24px;
	font-weight: 600;
}
#content main .table-data .head .bx {
	cursor: pointer;
}

#content main .table-data .order {
	flex-grow: 1;
	flex-basis: 500px;
}
#content main .table-data .order table {
	width: 100%;
	border-collapse: collapse;
}
#content main .table-data .order table th {
	padding-bottom: 12px;
	font-size: 13px;
	text-align: left;
	border-bottom: 1px solid var(--grey);
}
#content main .table-data .order table td {
	padding: 16px 0;
}



#content main .table-data .order table tr td .status {
	font-size: 10px;
	padding: 6px 16px;
	color: var(--light);
	border-radius: 20px;
	font-weight: 700;
}
#content main .table-data .order table tr td .status.completed {
	background: var(--green);
}
#content main .table-data .order table tr td .status.process {
	background: var(--blue);
}
#content main .table-data .order table tr td .status.pending {
	background: var(--red);
}


#content main .table-data .todo {
	flex-grow: 0.4;
	flex-basis: 300px;
  
}


#content main .table-data .todo .todo-list {
	width: 100%;
}
#content main .table-data .todo .todo-list li {
	width: 100%;
	margin-bottom: 16px;
	background: var(--grey);
	border-radius: 10px;
	padding: 14px 20px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
#content .todo .container .text h3 {
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
}
#content main .table-data .todo .todo-list li .bx {
	cursor: pointer;
}
#content main .table-data .todo .todo-list li.completed {
	border-left: 10px solid var(--blue);
}
#content main .table-data .todo .todo-list li.not-completed {
	border-left: 10px solid var(--orange);
}
#content main .table-data .todo .todo-list li:last-child {
	margin-bottom: 0;
}
/* MAIN */
/* CONTENT */

    </style>
