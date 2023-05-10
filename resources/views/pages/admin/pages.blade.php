@extends('layouts.admin.app')
@section('content')
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Bootstrap Table with Header - Light -->
                <div class="card">
                    <h5 class="card-header">All Pages</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>EndPoint</th>
                                    <th>Open</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @forelse ($pages as $page)
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>{{ $page->id }}</td>
                                        <td><strong>{{ $page->title }}</strong></td>
    
                                        <td>
                                            {{$page->end_point}}
                                        </td>
    
                                        <td>
                                            <a target="_blank" href="{{ $page->end_point}}">{{$page->title}}</a>
                                        </td>
                                        <td>
                                            <a href="pages{{$page->end_point=='/'? '/home':$page->end_point}}" type="button" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
    
                                </tbody>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center p5">
                                        No Posts
                                    </td>
                                </tr>
                            @endforelse
    
                        </table>
                    </div>
                </div>
                <!-- Bootstrap Table with Header - Light -->
            </div>
            <!-- / Content -->
    
            {{-- Pagination --}}
            {{-- <div class="container d-flex justify-content-center">
                {{ $pages->links() }}
            </div> --}}
    
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                    <div class="mb-2 mb-md-0">
                        <?php echo date('Y'); ?> Hisa Technologies
    
                    </div>
                </div>
            </footer>
            <!-- / Footer -->
    
            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
        </div>
    
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->
@endsection