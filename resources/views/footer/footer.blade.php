    
 @if(session()->get('role')==1):
 <footer class="footer">
     @else
     <footer class="footer" style="left: 0">
     @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Exam.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a target="_blank" class="text-reset">Exam</a>
                </div>
            </div>
        </div>
    </div>
</footer>
