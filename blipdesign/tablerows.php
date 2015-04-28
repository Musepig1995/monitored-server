<script>
	function getSingleServer($val) {
		$.ajax({
			url : "http://harrisonsouth.co.uk/blip/api/servers/" + $val + "/usage",
			method : "GET",
			success : function(data){
			$(data).each(function(index){
				$sid=data.server_id;
				$bandwidth=data.bandwidth;
				$cpu=data.cpu;
				$diskspace=data.diskspace;
				$memory=data.memory;
	
				$array=[$sid, $bandwidth, $cpu, $diskspace, $memory];
				});
			}
		});
		<tr>
			for(var i = 0; i < $array.length; ++i){
				$("overview").append("<td>" + $array[i] + "</td>");
			}
			console.log("LOOP ");
		</tr>
	}
</script>


	

