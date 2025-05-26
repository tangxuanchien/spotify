    <div class="form-group">
        <label class="form-label">{{$slot}}</label>
        <div class="date-inputs">
            <div class="form-group">
                <label for="day" class="form-label">Ngày</label>
                <input type="number" class="form-control" id="day" name="day" placeholder="DD" min="1"
                    max="31" required value={{old('day')}}>
            </div>
            <div class="form-group">
                <label for="month" class="form-label">Tháng</label>
                <input type="number" class="form-control" id="month" name="month" placeholder="MM" min="1"
                    max="12" required value={{old('month')}}>
            </div>
            <div class="form-group">
                <label for="year" class="form-label">Năm</label>
                <input type="number" class="form-control" id="year" name="year" placeholder="YYYY" min="1900"
                    max="2023" required value={{old('year')}}>
            </div>
        </div>
    </div>
