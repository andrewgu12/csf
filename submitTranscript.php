<form id="uploadTranscript" action="uploadPDF.php" enctype="multipart/form-data" method="post">
	<div class="separation">
		<h3>Upload Transcripts</h3>
		<div class = "row">
			<div class="large-6 offset-3 columns">
			<label for = "studid">Enter your student ID:</label>
				<input type="text" name="studid" id="studid">
		</div>		
		<div class="row">
			<div class="large-6  offset-3 columns">
				<label for="transcript">Upload transcript. Please rename file to your student id (123456.pdf).</label>
				<input type="file" name="transcript" id="transcript">
			</div>
		</div>
		<div class="buttonRow">			
				<input type="submit" class="button" value="Join!"/>			
		</div>
	</div>
</form>