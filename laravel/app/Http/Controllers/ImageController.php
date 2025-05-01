use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|max:2048',
    ]);

    $image = $request->file('image');
    $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

    // Step 1: Upload to MinIO
    $path = $image->storeAs('uploads', $fileName, 'minio');

    // Step 2: Save thumbnail to public folder
    $thumbnailPath = 'public/thumbnails/' . $fileName;
    Image::make($image)->fit(200, 200)->save(storage_path('app/' . $thumbnailPath));

    return response()->json([
        'message' => 'Image uploaded successfully',
        'original' => $path,
        'thumbnail_url' => asset('storage/thumbnails/' . $fileName),
    ]);
}
