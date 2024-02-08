<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arsiparis demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{-- ? | DATATABLES --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bulma.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bulma.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bulma.css" rel="stylesheet">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md p-4 m-4">
                <table id="tabel_surat" class="table table-striped" style="width:100%">
                    <thead>
                        <tr role="row">
                            <th class="text-center">No</th>
                            <th>Nama Surat</th>
                            <th>Nomor Surat</th>
                            <th>Surat Masuk</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 0 ?>
                        @foreach ($surat as $item)
                        <tr role="row">
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $item->nama_surat }}</td>
                            <td>{{ $item->no_surat }}</td>
                            <td>@DateIndo({{ $item->created_at }})</td>
                            <td class="text-center">
                                <a href="{{ url('/admin/barang/' . $item->id . '/detail') }}"
                                    class="btn btn-sm btn-secondary">Detail</a>

                                <a href="{{ url('/admin/barang/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                {{-- <a href="#" class="btn btn-sm btn-danger">Delete</a> --}}
                                <form action="{{ url('/admin/barang/' . $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="save" class="btn btn-danger btn-sm show_confirm_delete">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- ? | JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    {{-- ? | B5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    {{-- ? | DATATABLES --}}
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bulma.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bulma.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bulma.js"></script>




    <script>
        $('#tabel_surat').DataTable({
            // dom: 'Bfrtip',
            // buttons: ['colvis']
        });
    </script>
</body>

</html>