<form method="POST" action="{{ route('songs.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">عنوان</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required>
    </div>
    <div>
        <label for="artist_id">هنرمند</label>
        <select name="artist_id" id="artist_id" required>
            @foreach($artists as $artist)
                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="genre_id">ژانر</label>
        <select name="genre_id" id="genre_id" required>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="mood_id">حس و حال</label>
        <select name="mood_id" id="mood_id" required>
            @foreach($moods as $mood)
                <option value="{{ $mood->id }}">{{ $mood->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="cover_image">تصویر کاور</label>
        <input type="file" name="cover_image" id="cover_image">
    </div>
    <div>
        <label for="audio_file">لینک فایل آهنگ</label>
        <input type="url" name="audio_file" id="audio_file" value="{{ old('audio_file') }}" placeholder="https://example.com/songs/song1.mp3" required>
    </div>
    <div>
        <label for="duration">مدت زمان (به فرمت mm:ss)</label>
        <input type="text" name="duration" id="duration" value="{{ old('duration') }}" placeholder="05:00">
    </div>
    <div>
        <label for="description">توضیحات</label>
        <textarea name="description" id="description">{{ old('description') }}</textarea>
    </div>
    <button type="submit">ذخیره</button>
</form>