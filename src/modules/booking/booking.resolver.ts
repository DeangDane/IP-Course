import { Resolver, Mutation, Args, Int, Query } from '@nestjs/graphql';
import { BookingService } from './booking.service';
import { Booking } from './entities/booking.entity';
import { CreateBookingInput } from './dto/create-booking.input';

@Resolver(() => Booking)
export class BookingResolver {
  constructor(private readonly bookingService: BookingService) {}

  @Mutation(() => Booking)
  bookHotel(@Args('input') input: CreateBookingInput): Promise<Booking> {
    return this.bookingService.create(input);
  }

  @Mutation(() => Boolean)
  cancelBooking(@Args('id', { type: () => Int }) id: number): Promise<boolean> {
    return this.bookingService.cancel(id);
  }

  @Mutation(() => Booking)
  checkIn(@Args('id', { type: () => Int }) id: number): Promise<Booking> {
    return this.bookingService.checkIn(id);
  }

  @Query(() => [Booking])
  getBookingsByDateRange(
    @Args('startDate') startDate: Date,
    @Args('endDate') endDate: Date,
  ): Promise<Booking[]> {
    return this.bookingService.findByDateRange(startDate, endDate);
  }
}
