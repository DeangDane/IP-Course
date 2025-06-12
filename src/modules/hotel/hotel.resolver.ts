import { Args, Int, Mutation, Query, Resolver } from '@nestjs/graphql';
import { Hotel } from './entities/hotel.entity';
import { CreateHotelInput } from './dto/create-hotel.input';
import { UpdateHotelInput } from './dto/update-hotel.input';
import { HotelService } from './hotel.service';

@Resolver(() => Hotel)
export class HotelResolver {
  constructor(private readonly hotelService: HotelService) {}

  @Mutation(() => Hotel)
  createHotel(@Args('input') input: CreateHotelInput): Promise<Hotel> {
    return this.hotelService.create(input);
  }

  @Query(() => [Hotel])
  findAllHotels(): Promise<Hotel[]> {
    return this.hotelService.findAll();
  }

  @Query(() => Hotel, { nullable: true })
  findOneHotel(
    @Args('id', { type: () => Int }) id: number,
  ): Promise<Hotel | null> {
    return this.hotelService.findOne(id);
  }

  @Mutation(() => Hotel)
  updateHotel(@Args('input') input: UpdateHotelInput): Promise<Hotel> {
    return this.hotelService.update(input.id, input);
  }

  @Mutation(() => Boolean)
  deleteHotel(@Args('id', { type: () => Int }) id: number): Promise<boolean> {
    return this.hotelService.remove(id);
  }
}
